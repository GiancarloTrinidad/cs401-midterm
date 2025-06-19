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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('first name of student');
            $table->string('last_name')->comment('last name of student');
            $table->string('program')->comment('chosen program of student');
            $table->string('enrollment_year')->comment('year the student enrolled')->max(4);
            $table->datetime('birthday')->comment('birthday of student');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('students');
    }
};
