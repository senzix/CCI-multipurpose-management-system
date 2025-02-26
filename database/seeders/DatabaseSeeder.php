<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            SuperAdminSeeder::class,
            DocumentCategorySeeder::class,
            ClassCategorySeeder::class,
            StudentSeeder::class,
            GrantSeeder::class,
            EmployeeManagementSeeder::class,
        ]);
    }
}
