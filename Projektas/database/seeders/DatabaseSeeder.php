<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\Student;
use App\Models\AttendanceGroup;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // School::factory()->count(100)->create();
        // AttendanceGroup::factory()->count(100)->create();   
        // Student::factory()->count(1000)->create(); 

        $this->call([
            SchoolSeeder::class,
            AttendanceGroupSeeder::class,
            StudentSeeder::class
        ]);

    }
}
