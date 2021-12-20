<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            'role_id'=> '1',
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::insert([
            'role_id'=> '2',
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::insert([
            'role_id'=> '3',
            'name' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
