<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUsersSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ]
        );

        // Create Regular User
        User::updateOrCreate(
            ['email' => 'jose@example.com'],
            [
                'name' => 'Jose',
                'password' => Hash::make('12345'),
                'is_admin' => false,
            ]
        );
    }
}
