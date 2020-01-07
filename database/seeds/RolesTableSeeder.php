<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Role::create([
            'name' => 'super_admin',
            'display_name' => 'Super Admin',
            'description' => 'Can access anything in the website'
        ]);

        $subAdmin = \App\Role::create([
            'name' => 'sub_admin',
            'display_name' => 'Sub Admin',
            'description' => 'Can access this department only in the website'
        ]);

        $Admin = \App\Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Can access his profile in the website'
        ]);
    }
}
