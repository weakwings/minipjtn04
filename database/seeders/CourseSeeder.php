<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            ['matrix_course' => 'Nursing'],
            ['matrix_course' => 'Graphic Design'],
            ['matrix_course' => 'Law'],
            ['matrix_course' => 'Computer Science'],
            ['matrix_course' => 'Business Administration'],
            ['matrix_course' => 'English Literature'],
            ['matrix_course' => 'Mathematics'],
            ['matrix_course' => 'History'],
            ['matrix_course' => 'Physics'],
            ['matrix_course' => 'Chemistry'],
        ]);
    }
}
