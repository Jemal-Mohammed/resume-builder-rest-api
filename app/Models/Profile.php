<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'file',
        'address',
        'experience',
        'skills',
        'courses',
        'certification',
        'language',
        'personal_interests',
        'online_profiles',
        'references',
        'birth_date',
        'gender',
        'education',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
