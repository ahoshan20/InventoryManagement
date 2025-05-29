<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '01712345678',
                'address' => '123 Main Street',
                'city' => 'Dhaka',
                'state' => 'Dhaka',
                'country' => 'Bangladesh',
                'postal_code' => '1207',
                'customer_type' => 'Retail',
                'credit_limit' => 50000,
                'tax_id' => 'TAX123456',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '01812345678',
                'address' => '456 Park Avenue',
                'city' => 'Chittagong',
                'state' => 'Chittagong',
                'country' => 'Bangladesh',
                'postal_code' => '4000',
                'customer_type' => 'Wholesale',
                'credit_limit' => 100000,
                'tax_id' => 'TAX654321',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
