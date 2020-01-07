<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'General Manager',
            'email' => 'gm@gmail.com',
            'password' => bcrypt('userGM')
            ]);

        $user->attachRole('super_admin');
    }
}
