<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'status' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Use Hash facade
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
            ],
            [
                'name' => 'John Customer',
                'email' => 'john@example.com',
                'status' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('secret123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
            ],
            [
                'name' => 'Jane Staff',
                'email' => 'jane@example.com',
                'status' => false,
                'email_verified_at' => null,
                'password' => Hash::make('secret456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(), // Soft deleted
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => 1,
            ],
        ]);
    }
}
