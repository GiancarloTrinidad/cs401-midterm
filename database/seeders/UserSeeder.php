<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        $roles = Role::all();

        foreach ($users as $user) 
        {
            $randomRoles = $roles->random()->id;
            $user->roles()->attach($randomRoles);
        }
    }
}
