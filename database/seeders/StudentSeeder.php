<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use App\Models\Course;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();
        $users = User::all();

        foreach ($users->take(5) as $user) 
        {
            $student = Student::factory()->create([
                'user_id' => $user
            ]);

            $randomCourseId = $courses->random()->id;
            $student->courses()->attach($randomCourseId);
        }
    }
}
