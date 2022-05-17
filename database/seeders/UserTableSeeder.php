<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'super_admin')->first();
        $role_admin = Role::where('name', 'admin')->first();


        // Super Admin
        $superAdmin = new User();
        $superAdmin->name = 'Super Admin';
        $superAdmin->email = 'superadmin@datatrix.dev';
        $superAdmin->password = bcrypt('password');
        $superAdmin->save();
        $superAdmin->attachRole($role_superadmin);

        // Admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@datatrix.dev';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->attachRole($role_admin);

    }
}
