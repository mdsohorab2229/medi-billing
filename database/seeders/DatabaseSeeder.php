<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        // Call Permission Table Seeder
        $this->call(PermissionTableSeeder::class);

        // Call Role Table Seeder
        $this->call(RoleTableSeeder::class);

        // Call User Table Seeder
        $this->call(UserTableSeeder::class);
    }
}
