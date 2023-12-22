<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default Departments
        DB::table('departments')->insert([
            [
                'id' => 1,
                'department_name' => 'Bangla',
                'slug' => 'bangla',
                'priority' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'department_name' => 'English',
                'slug' => 'english',
                'priority' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'department_name' => 'ICT',
                'slug' => 'ict',
                'priority' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'department_name' => 'Mathematics',
                'slug' => 'mathematics',
                'priority' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'department_name' => 'Physics',
                'slug' => 'physics',
                'priority' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'department_name' => 'Chemistry',
                'slug' => 'chemistry',
                'priority' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'department_name' => 'Biology',
                'slug' => 'biology',
                'priority' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'department_name' => 'Business Studies',
                'slug' => 'business-studies',
                'priority' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'department_name' => 'Statistics',
                'slug' => 'statistics',
                'priority' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'department_name' => 'Economics',
                'slug' => 'economics',
                'priority' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'department_name' => 'Social work',
                'slug' => 'social-work',
                'priority' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'department_name' => 'Geography',
                'slug' => 'geography',
                'priority' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'department_name' => 'Political Science',
                'slug' => 'political-science',
                'priority' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'department_name' => 'History',
                'slug' => 'history',
                'priority' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
