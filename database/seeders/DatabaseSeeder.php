<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Student::factory(50)->create();
    }
}
