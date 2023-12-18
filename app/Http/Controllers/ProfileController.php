<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class ProfileController extends Controller
{
    public function update(Request $request)
    {

        try {
            $request->validate([
                'phone' => 'required|string',
                'address' => 'nullable|string',
                'experience' => 'nullable|string',
                'skills' => 'nullable|string',
                'courses' => 'nullable|string',
                'certification' => 'nullable|string',
                'language' => 'nullable|string',
                'personal_interests' => 'nullable|string',
                'online_profiles' => 'nullable|string',
                'references' => 'nullable|string',
                'birth_date' => 'nullable|date',
                'gender' => 'required', // Adjust possible values
                'education' => 'nullable|string',
            ]);
            $file = $request->file('file');
            // return response($file->getClientOriginalName());
            $data = $request->all();
            if ($request->hasFile("file")) {
                $data['file'] = $file->storeAs('public/uploads', $file->getClientOriginalName());
            }

            $data['user_id'] = Auth::id();
            $data['birth_date'] = Carbon::parse($data['birth_date'])->toDateString();

            $existingProfile = Profile::where('user_id', Auth::id())->first();

            if ($existingProfile) {
                if ($existingProfile->file) {
                    Storage::delete('/uploads/' . $existingProfile->file);
                }

                Profile::where('user_id', Auth::id())->update($data);
                return response()->json("Profile updated", 200);
            } else {
                Profile::create($data);
                return response()->json("Profile completed", 201);
            }
        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }

    public function download()
    {

            $profile = Profile::where('user_id', Auth::id())->with('user')->first();

            if (!$profile) {
                return response()->json('Profile not found', 404);
            }
// return $profile;
            // $pdf = PDF::loadView('testPDF', ['profile' => $profile]);
            $pdf = app('dompdf.wrapper')->loadView('testPDF', ['profile' => $profile]);

            return $pdf->download('CV Of ');

    }
}
