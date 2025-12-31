<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User biasa
        $users = [
            [
                'name' => 'Ozan Customer',
                'email' => 'ozan@example.com',
                'password' => bcrypt('password123'),
                'role' => 'user',
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No. 123, Bandung',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah@example.com',
                'password' => bcrypt('password123'),
                'role' => 'user',
                'phone' => '081298765432',
                'address' => 'Jl. Sudirman No. 45, Jakarta',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'password' => bcrypt('password123'),
                'role' => 'user',
                'phone' => '082112345678',
                'address' => 'Jl. Diponegoro No. 67, Surabaya',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Admin TokoOCI',
                'email' => 'admin@tokooci.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
                'phone' => '081111111111',
                'address' => 'Jl. Admin No. 1, Bandung',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Manager Toko',
                'email' => 'manager@tokooci.com',
                'password' => bcrypt('manager123'),
                'role' => 'admin',
                'phone' => '081222222222',
                'address' => 'Jl. Manager No. 2, Jakarta',
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
