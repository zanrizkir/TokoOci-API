<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => 'Laptop gaming, ultrabook, workstation berbagai merk dan spesifikasi'
            ],
            [
                'id' => 2,
                'name' => 'Komputer Desktop',
                'slug' => 'komputer-desktop',
                'description' => 'PC desktop lengkap, all-in-one, mini PC'
            ],
            [
                'id' => 3,
                'name' => 'Processor',
                'slug' => 'processor',
                'description' => 'Processor Intel dan AMD berbagai generasi'
            ],
            [
                'id' => 4,
                'name' => 'Motherboard',
                'slug' => 'motherboard',
                'description' => 'Motherboard Intel dan AMD berbagai chipset'
            ],
            [
                'id' => 5,
                'name' => 'RAM',
                'slug' => 'ram',
                'description' => 'Memory RAM DDR4, DDR5, SODIMM, dan ECC'
            ],
            [
                'id' => 6,
                'name' => 'VGA Card',
                'slug' => 'vga-card',
                'description' => 'Kartu grafis NVIDIA GeForce dan AMD Radeon'
            ],
            [
                'id' => 7,
                'name' => 'Storage',
                'slug' => 'storage',
                'description' => 'SSD, HDD, NVMe, dan external storage'
            ],
            [
                'id' => 8,
                'name' => 'Power Supply',
                'slug' => 'power-supply',
                'description' => 'PSU berbagai watt 80 Plus Bronze, Gold, Platinum'
            ],
            [
                'id' => 9,
                'name' => 'Casing',
                'slug' => 'casing',
                'description' => 'Casing ATX, Micro-ATX, Mini-ITX dengan RGB'
            ],
            [
                'id' => 10,
                'name' => 'Monitor',
                'slug' => 'monitor',
                'description' => 'Monitor gaming, office, ultrawide, dan 4K'
            ],
            [
                'id' => 11,
                'name' => 'Keyboard & Mouse',
                'slug' => 'keyboard-mouse',
                'description' => 'Keyboard mechanical, mouse gaming, dan peripheral'
            ],
            [
                'id' => 12,
                'name' => 'Cooling',
                'slug' => 'cooling',
                'description' => 'CPU cooler, case fan, liquid cooling, dan thermal paste'
            ]
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['id' => $category['id']],
                $category
            );
        }
    }
}
