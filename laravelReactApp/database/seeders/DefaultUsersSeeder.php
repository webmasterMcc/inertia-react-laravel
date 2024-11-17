<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUsersSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345'),
                'is_admin' => true,
            ]
        );

        User::firstOrCreate(
            ['email' => 'jose@example.com'],
            [
                'name' => 'Jose',
                'password' => Hash::make('12345'),
                'is_admin' => false,
            ]
        );
    }
}
