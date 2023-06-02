<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'password' => 'admin!234',
                'role' => 1
            ],
            [
                'name' => 'User',
                'email' => 'User@gmail.com',
                'password' => 'user!234',
                'role' => 0
            ]
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
