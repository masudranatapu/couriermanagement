<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::insert([
            'name'=> 'Admin',
        ]);
        Role::insert([
            'name'=> 'Agent',
        ]);
        Role::insert([
            'name'=> 'Rider',
        ]);
        Role::insert([
            'name'=> 'Account',
        ]);
        Role::insert([
            'name'=> 'User',
        ]);
    }
}
