<?php

namespace Database\Seeders;

use App\Models\CustomerContact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         CustomerContact::insert([
            [
                'customer_id' => 1,
                'name' => 'Alice Rahman',
                'email' => 'alice@example.com',
                'phone' => '01911223344',
                'position' => 'Manager',
                'is_primary' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'name' => 'Bob Karim',
                'email' => 'bob@example.com',
                'phone' => '01699887766',
                'position' => 'Assistant',
                'is_primary' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
