<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Assuming you have a 'users' table

            $table->string('phone');
            $table->string('file')->nullable();
            $table->string('address');
            $table->string('experience');
            $table->string('skills');
            $table->string('courses');
            $table->string('certification');
            $table->string('language');
            $table->string('personal_interests');
            $table->string('online_profiles');
            $table->string('references');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('education');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
