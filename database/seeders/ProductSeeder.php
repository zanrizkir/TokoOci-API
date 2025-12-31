<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // ========== LAPTOP (Category ID: 1) ==========
            [
                'name' => 'ASUS ROG Zephyrus G14 GA402',
                'description' => 'Laptop gaming 14" dengan RTX 4060, AMD Ryzen 9 7940HS, 16GB RAM, 1TB SSD, layar QHD 165Hz',
                'price' => 25999000,
                'stock' => 8,
                'category_id' => 1,
                'brand' => 'ASUS',
                'specifications' => json_encode([
                    'processor' => 'AMD Ryzen 9 7940HS',
                    'graphics' => 'NVIDIA GeForce RTX 4060 8GB GDDR6',
                    'ram' => '16GB DDR5 4800MHz',
                    'storage' => '1TB NVMe PCIe 4.0 SSD',
                    'display' => '14" QHD (2560x1600) 165Hz, 100% DCI-P3',
                    'os' => 'Windows 11 Home',
                    'battery' => '76Wh',
                    'weight' => '1.72kg'
                ]),
                'image_url' => 'https://example.com/images/asus-rog-g14.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Lenovo Legion 5 Pro 16',
                'description' => 'Laptop gaming 16" RTX 4070, Intel i7-13700HX, 32GB RAM, 1TB SSD, WQXGA 240Hz',
                'price' => 28999000,
                'stock' => 5,
                'category_id' => 1,
                'brand' => 'Lenovo',
                'specifications' => json_encode([
                    'processor' => 'Intel Core i7-13700HX',
                    'graphics' => 'NVIDIA GeForce RTX 4070 8GB GDDR6',
                    'ram' => '32GB DDR5 5200MHz',
                    'storage' => '1TB NVMe PCIe 4.0 SSD',
                    'display' => '16" WQXGA (2560x1600) 240Hz, 100% sRGB',
                    'os' => 'Windows 11 Home',
                    'battery' => '80Wh',
                    'weight' => '2.5kg'
                ]),
                'image_url' => 'https://example.com/images/lenovo-legion-5-pro.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Apple MacBook Air M3 15"',
                'description' => 'Laptop Apple chip M3, 16GB RAM, 512GB SSD, Liquid Retina Display, 18 jam baterai',
                'price' => 22999000,
                'stock' => 12,
                'category_id' => 1,
                'brand' => 'Apple',
                'specifications' => json_encode([
                    'processor' => 'Apple M3 8-core',
                    'graphics' => '10-core GPU',
                    'ram' => '16GB Unified Memory',
                    'storage' => '512GB SSD',
                    'display' => '15.3" Liquid Retina, 2880x1864, 500 nits',
                    'os' => 'macOS Sonoma',
                    'battery' => '66.5Wh (up to 18 hours)',
                    'weight' => '1.51kg'
                ]),
                'image_url' => 'https://example.com/images/macbook-air-m3.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Acer Predator Helios 16',
                'description' => 'Laptop gaming 16" RTX 4080, Intel i9-13900HX, 32GB RAM, 2TB SSD, Mini LED 240Hz',
                'price' => 45999000,
                'stock' => 3,
                'category_id' => 1,
                'brand' => 'Acer',
                'specifications' => json_encode([
                    'processor' => 'Intel Core i9-13900HX',
                    'graphics' => 'NVIDIA GeForce RTX 4080 12GB GDDR6',
                    'ram' => '32GB DDR5 5600MHz',
                    'storage' => '2TB NVMe PCIe 4.0 SSD (RAID 0)',
                    'display' => '16" Mini LED, 2560x1600, 240Hz, 1000 nits',
                    'os' => 'Windows 11 Home',
                    'battery' => '90Wh',
                    'weight' => '2.6kg'
                ]),
                'image_url' => 'https://example.com/images/acer-predator-helios.jpg',
                'is_active' => true,
            ],

            // ========== PROCESSOR (Category ID: 3) ==========
            [
                'name' => 'Intel Core i9-14900K',
                'description' => 'Processor Intel Core i9 gen 14, 24 core (8P+16E), up to 6.0GHz, 36MB cache',
                'price' => 8999000,
                'stock' => 15,
                'category_id' => 3,
                'brand' => 'Intel',
                'specifications' => json_encode([
                    'cores' => '24 (8 Performance + 16 Efficient)',
                    'threads' => '32',
                    'base_clock' => '3.2 GHz',
                    'max_turbo' => '6.0 GHz',
                    'cache' => '36MB Intel Smart Cache',
                    'socket' => 'LGA1700',
                    'tdp' => '125W',
                    'graphics' => 'Intel UHD Graphics 770'
                ]),
                'image_url' => 'https://example.com/images/i9-14900k.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'AMD Ryzen 9 7950X3D',
                'description' => 'Processor AMD Ryzen 9 dengan 3D V-Cache, 16 core, up to 5.7GHz, 144MB cache',
                'price' => 10999000,
                'stock' => 10,
                'category_id' => 3,
                'brand' => 'AMD',
                'specifications' => json_encode([
                    'cores' => '16',
                    'threads' => '32',
                    'base_clock' => '4.2 GHz',
                    'max_boost' => '5.7 GHz',
                    'cache' => '144MB (L2+L3+3D V-Cache)',
                    'socket' => 'AM5',
                    'tdp' => '120W',
                    'graphics' => 'AMD Radeon Graphics'
                ]),
                'image_url' => 'https://example.com/images/ryzen-7950x3d.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Intel Core i5-14600K',
                'description' => 'Processor Intel Core i5 gen 14, 14 core (6P+8E), up to 5.3GHz, 24MB cache',
                'price' => 4999000,
                'stock' => 25,
                'category_id' => 3,
                'brand' => 'Intel',
                'specifications' => json_encode([
                    'cores' => '14 (6 Performance + 8 Efficient)',
                    'threads' => '20',
                    'base_clock' => '3.5 GHz',
                    'max_turbo' => '5.3 GHz',
                    'cache' => '24MB Intel Smart Cache',
                    'socket' => 'LGA1700',
                    'tdp' => '125W',
                    'graphics' => 'Intel UHD Graphics 770'
                ]),
                'image_url' => 'https://example.com/images/i5-14600k.jpg',
                'is_active' => true,
            ],

            // ========== RAM (Category ID: 5) ==========
            [
                'name' => 'Corsair Vengeance RGB 32GB DDR5 6000MHz',
                'description' => 'RAM DDR5 32GB (2x16GB) 6000MHz CL36 dengan RGB lighting',
                'price' => 2499000,
                'stock' => 30,
                'category_id' => 5,
                'brand' => 'Corsair',
                'specifications' => json_encode([
                    'capacity' => '32GB (2x16GB)',
                    'speed' => '6000MHz',
                    'latency' => 'CL36-36-36-76',
                    'type' => 'DDR5',
                    'voltage' => '1.35V',
                    'heatsink' => 'Aluminium dengan RGB',
                    'compatibility' => 'Intel XMP 3.0, AMD EXPO'
                ]),
                'image_url' => 'https://example.com/images/corsair-vengeance-ddr5.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'G.Skill Trident Z5 RGB 64GB DDR5 6400MHz',
                'description' => 'RAM DDR5 64GB (2x32GB) 6400MHz CL32 RGB untuk workstation',
                'price' => 5499000,
                'stock' => 12,
                'category_id' => 5,
                'brand' => 'G.Skill',
                'specifications' => json_encode([
                    'capacity' => '64GB (2x32GB)',
                    'speed' => '6400MHz',
                    'latency' => 'CL32-39-39-102',
                    'type' => 'DDR5',
                    'voltage' => '1.4V',
                    'heatsink' => 'Aluminium dengan RGB',
                    'compatibility' => 'Intel XMP 3.0 certified'
                ]),
                'image_url' => 'https://example.com/images/gskill-trident-z5.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'TeamGroup T-Force Delta RGB 16GB DDR4 3600MHz',
                'description' => 'RAM DDR4 16GB (2x8GB) 3600MHz CL18 RGB budget friendly',
                'price' => 1199000,
                'stock' => 50,
                'category_id' => 5,
                'brand' => 'TeamGroup',
                'specifications' => json_encode([
                    'capacity' => '16GB (2x8GB)',
                    'speed' => '3600MHz',
                    'latency' => 'CL18-22-22-42',
                    'type' => 'DDR4',
                    'voltage' => '1.35V',
                    'heatsink' => 'Aluminium dengan RGB',
                    'compatibility' => 'Intel/AMD'
                ]),
                'image_url' => 'https://example.com/images/teamgroup-delta.jpg',
                'is_active' => true,
            ],

            // ========== VGA CARD (Category ID: 6) ==========
            [
                'name' => 'ASUS ROG Strix GeForce RTX 4090 OC Edition',
                'description' => 'Kartu grafis NVIDIA RTX 4090 24GB GDDR6X, triple fan, RGB Aura Sync',
                'price' => 34999000,
                'stock' => 4,
                'category_id' => 6,
                'brand' => 'ASUS',
                'specifications' => json_encode([
                    'gpu' => 'NVIDIA GeForce RTX 4090',
                    'memory' => '24GB GDDR6X',
                    'memory_speed' => '21 Gbps',
                    'cuda_cores' => '16384',
                    'bus_width' => '384-bit',
                    'power_connectors' => '1x 16-pin',
                    'recommended_psu' => '1000W',
                    'length' => '357mm'
                ]),
                'image_url' => 'https://example.com/images/asus-rog-rtx4090.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'MSI GeForce RTX 4070 Ti SUPER Gaming X Slim',
                'description' => 'Kartu grafis NVIDIA RTX 4070 Ti SUPER 16GB, slim design, dual fan',
                'price' => 14999000,
                'stock' => 10,
                'category_id' => 6,
                'brand' => 'MSI',
                'specifications' => json_encode([
                    'gpu' => 'NVIDIA GeForce RTX 4070 Ti SUPER',
                    'memory' => '16GB GDDR6X',
                    'memory_speed' => '21 Gbps',
                    'cuda_cores' => '8448',
                    'bus_width' => '256-bit',
                    'power_connectors' => '1x 16-pin',
                    'recommended_psu' => '750W',
                    'length' => '305mm'
                ]),
                'image_url' => 'https://example.com/images/msi-rtx4070ti-super.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Sapphire Radeon RX 7800 XT Nitro+',
                'description' => 'Kartu grafis AMD Radeon RX 7800 XT 16GB, triple fan, ARGB lighting',
                'price' => 10999000,
                'stock' => 8,
                'category_id' => 6,
                'brand' => 'Sapphire',
                'specifications' => json_encode([
                    'gpu' => 'AMD Radeon RX 7800 XT',
                    'memory' => '16GB GDDR6',
                    'memory_speed' => '19.5 Gbps',
                    'stream_processors' => '3840',
                    'bus_width' => '256-bit',
                    'power_connectors' => '2x 8-pin',
                    'recommended_psu' => '700W',
                    'length' => '320mm'
                ]),
                'image_url' => 'https://example.com/images/sapphire-rx7800xt.jpg',
                'is_active' => true,
            ],

            // ========== STORAGE (Category ID: 7) ==========
            [
                'name' => 'Samsung 990 PRO 2TB NVMe SSD',
                'description' => 'SSD NVMe PCIe 4.0 2TB dengan kecepatan baca 7450MB/s, heatsink',
                'price' => 3599000,
                'stock' => 20,
                'category_id' => 7,
                'brand' => 'Samsung',
                'specifications' => json_encode([
                    'capacity' => '2TB',
                    'interface' => 'PCIe 4.0 x4',
                    'read_speed' => '7450 MB/s',
                    'write_speed' => '6900 MB/s',
                    'form_factor' => 'M.2 2280',
                    'nand_type' => '3-bit MLC',
                    'tbw' => '1200TB',
                    'warranty' => '5 years'
                ]),
                'image_url' => 'https://example.com/images/samsung-990-pro.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Western Digital Black SN850X 1TB',
                'description' => 'SSD NVMe PCIe 4.0 1TB untuk gaming dan creative work',
                'price' => 1899000,
                'stock' => 35,
                'category_id' => 7,
                'brand' => 'Western Digital',
                'specifications' => json_encode([
                    'capacity' => '1TB',
                    'interface' => 'PCIe 4.0 x4',
                    'read_speed' => '7300 MB/s',
                    'write_speed' => '6300 MB/s',
                    'form_factor' => 'M.2 2280',
                    'nand_type' => '3D TLC',
                    'tbw' => '600TB',
                    'warranty' => '5 years'
                ]),
                'image_url' => 'https://example.com/images/wd-sn850x.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Seagate Barracuda 4TB HDD',
                'description' => 'Hard disk 4TB 5400RPM SATA 6Gb/s untuk storage massal',
                'price' => 1599000,
                'stock' => 25,
                'category_id' => 7,
                'brand' => 'Seagate',
                'specifications' => json_encode([
                    'capacity' => '4TB',
                    'interface' => 'SATA 6Gb/s',
                    'rpm' => '5400',
                    'cache' => '256MB',
                    'form_factor' => '3.5"',
                    'workload_rate' => '180TB/year',
                    'warranty' => '2 years'
                ]),
                'image_url' => 'https://example.com/images/seagate-barracuda.jpg',
                'is_active' => true,
            ],

            // ========== MOTHERBOARD (Category ID: 4) ==========
            [
                'name' => 'ASUS ROG Strix Z790-F Gaming WiFi',
                'description' => 'Motherboard Intel Z790 LGA1700, DDR5, WiFi 6E, 2.5Gb LAN, PCIe 5.0',
                'price' => 5999000,
                'stock' => 15,
                'category_id' => 4,
                'brand' => 'ASUS',
                'specifications' => json_encode([
                    'socket' => 'LGA1700',
                    'chipset' => 'Intel Z790',
                    'memory_slots' => '4x DDR5 up to 7800MHz',
                    'pcie_slots' => '1x PCIe 5.0 x16, 1x PCIe 4.0 x16',
                    'm2_slots' => '4x M.2 (PCIe 4.0)',
                    'sata_ports' => '6x SATA 6Gb/s',
                    'networking' => 'Intel 2.5Gb LAN, WiFi 6E',
                    'audio' => 'ROG SupremeFX 7.1'
                ]),
                'image_url' => 'https://example.com/images/asus-z790-f.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'MSI MAG B650 TOMAHAWK WIFI',
                'description' => 'Motherboard AMD B650 AM5, DDR5, WiFi 6E, PCIe 5.0, 2.5Gb LAN',
                'price' => 3999000,
                'stock' => 18,
                'category_id' => 4,
                'brand' => 'MSI',
                'specifications' => json_encode([
                    'socket' => 'AM5',
                    'chipset' => 'AMD B650',
                    'memory_slots' => '4x DDR5 up to 6600MHz',
                    'pcie_slots' => '1x PCIe 5.0 x16, 1x PCIe 4.0 x16',
                    'm2_slots' => '2x M.2 (PCIe 5.0 + 4.0)',
                    'sata_ports' => '6x SATA 6Gb/s',
                    'networking' => 'Realtek 2.5Gb LAN, WiFi 6E',
                    'audio' => 'Realtek ALC4080 7.1'
                ]),
                'image_url' => 'https://example.com/images/msi-b650-tomahawk.jpg',
                'is_active' => true,
            ],

            // ========== POWER SUPPLY (Category ID: 8) ==========
            [
                'name' => 'Corsair RM1000x SHIFT 1000W 80+ Gold',
                'description' => 'PSU 1000W 80+ Gold fully modular, ATX 3.0, PCIe 5.0, side-connect',
                'price' => 2999000,
                'stock' => 12,
                'category_id' => 8,
                'brand' => 'Corsair',
                'specifications' => json_encode([
                    'wattage' => '1000W',
                    'efficiency' => '80 Plus Gold',
                    'modular' => 'Fully Modular',
                    'atx_version' => 'ATX 3.0 & PCIe 5.0',
                    'connectors' => '1x 12VHPWR (600W), 8x PCIe, 12x SATA',
                    'fan' => '140mm Fluid Dynamic Bearing',
                    'warranty' => '10 years'
                ]),
                'image_url' => 'https://example.com/images/corsair-rm1000x-shift.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Seasonic Focus GX-850 850W 80+ Gold',
                'description' => 'PSU 850W 80+ Gold fully modular, hybrid silent fan, 10 tahun garansi',
                'price' => 2199000,
                'stock' => 20,
                'category_id' => 8,
                'brand' => 'Seasonic',
                'specifications' => json_encode([
                    'wattage' => '850W',
                    'efficiency' => '80 Plus Gold',
                    'modular' => 'Fully Modular',
                    'connectors' => '4x PCIe 6+2, 8x SATA',
                    'fan' => '120mm Hybrid Silent Fan',
                    'protections' => 'OVP, UVP, OCP, OPP, SCP, OTP',
                    'warranty' => '10 years'
                ]),
                'image_url' => 'https://example.com/images/seasonic-focus-gx850.jpg',
                'is_active' => true,
            ],

            // ========== CASING (Category ID: 9) ==========
            [
                'name' => 'Lian Li O11 Dynamic EVO RGB',
                'description' => 'Casing mid-tower dual chamber, tempered glass, support 420mm radiator',
                'price' => 2899000,
                'stock' => 8,
                'category_id' => 9,
                'brand' => 'Lian Li',
                'specifications' => json_encode([
                    'form_factor' => 'Mid-Tower',
                    'motherboard' => 'E-ATX, ATX, Micro-ATX, Mini-ITX',
                    'expansion_slots' => '8+2',
                    'radiator_support' => '420mm top, 360mm side/bottom',
                    'fan_support' => '10x 120mm or 4x 140mm',
                    'gpu_length' => 'up to 455mm',
                    'psu_length' => 'up to 210mm',
                    'material' => 'Steel, Tempered Glass'
                ]),
                'image_url' => 'https://example.com/images/lian-li-o11-evo.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Fractal Design North Charcoal Black',
                'description' => 'Casing mid-tower dengan front panel kayu oak, mesh airflow, tempered glass',
                'price' => 2499000,
                'stock' => 10,
                'category_id' => 9,
                'brand' => 'Fractal Design',
                'specifications' => json_encode([
                    'form_factor' => 'Mid-Tower',
                    'motherboard' => 'ATX, Micro-ATX, Mini-ITX',
                    'expansion_slots' => '7',
                    'radiator_support' => '360mm front, 280mm top',
                    'fan_support' => '3x 140mm or 6x 120mm',
                    'gpu_length' => 'up to 355mm',
                    'psu_length' => 'up to 170mm',
                    'front_panel' => 'Oak wood with mesh'
                ]),
                'image_url' => 'https://example.com/images/fractal-north.jpg',
                'is_active' => true,
            ],

            // ========== MONITOR (Category ID: 10) ==========
            [
                'name' => 'Samsung Odyssey G9 49" DQHD 240Hz',
                'description' => 'Monitor curved 49" 5120x1440 240Hz, 1000R curvature, QLED, HDR2000',
                'price' => 19999000,
                'stock' => 3,
                'category_id' => 10,
                'brand' => 'Samsung',
                'specifications' => json_encode([
                    'size' => '49"',
                    'resolution' => 'DQHD (5120x1440)',
                    'refresh_rate' => '240Hz',
                    'response_time' => '1ms GtG',
                    'panel_type' => 'VA, QLED',
                    'curvature' => '1000R',
                    'hdr' => 'HDR2000',
                    'ports' => 'DisplayPort 1.4, HDMI 2.1'
                ]),
                'image_url' => 'https://example.com/images/samsung-odyssey-g9.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'LG 27GP850-B 27" Nano IPS 180Hz',
                'description' => 'Monitor gaming 27" QHD Nano IPS 180Hz, 1ms, G-Sync Compatible, HDR10',
                'price' => 5899000,
                'stock' => 15,
                'category_id' => 10,
                'brand' => 'LG',
                'specifications' => json_encode([
                    'size' => '27"',
                    'resolution' => 'QHD (2560x1440)',
                    'refresh_rate' => '180Hz (overclock)',
                    'response_time' => '1ms GtG',
                    'panel_type' => 'Nano IPS',
                    'adaptive_sync' => 'G-Sync Compatible, FreeSync Premium',
                    'hdr' => 'HDR10',
                    'ports' => 'DisplayPort 1.4, HDMI 2.0'
                ]),
                'image_url' => 'https://example.com/images/lg-27gp850.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Dell S2722QC 27" 4K USB-C',
                'description' => 'Monitor 4K 27" IPS, USB-C 90W Power Delivery, built-in speakers',
                'price' => 5499000,
                'stock' => 12,
                'category_id' => 10,
                'brand' => 'Dell',
                'specifications' => json_encode([
                    'size' => '27"',
                    'resolution' => '4K UHD (3840x2160)',
                    'refresh_rate' => '60Hz',
                    'response_time' => '4ms',
                    'panel_type' => 'IPS',
                    'usb_c' => '90W Power Delivery',
                    'speakers' => '2x 3W',
                    'ports' => 'USB-C, HDMI 2.0, DisplayPort'
                ]),
                'image_url' => 'https://example.com/images/dell-s2722qc.jpg',
                'is_active' => true,
            ],

            // ========== KEYBOARD & MOUSE (Category ID: 11) ==========
            [
                'name' => 'Razer BlackWidow V4 Pro',
                'description' => 'Keyboard mechanical gaming Razer Green switches, per-key RGB, dial kontrol',
                'price' => 3499000,
                'stock' => 8,
                'category_id' => 11,
                'brand' => 'Razer',
                'specifications' => json_encode([
                    'switch_type' => 'Razer Green Mechanical',
                    'layout' => 'Full-size 104 keys',
                    'lighting' => 'Razer Chroma RGB per-key',
                    'features' => 'Multi-function dial, 8 macro keys',
                    'connectivity' => 'USB Type-C',
                    'construction' => 'Aluminium top plate',
                    'warranty' => '2 years'
                ]),
                'image_url' => 'https://example.com/images/razer-blackwidow-v4.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Logitech G Pro X Superlight 2',
                'description' => 'Mouse gaming wireless 32K sensor, 2KHz polling rate, 63g weight',
                'price' => 1999000,
                'stock' => 25,
                'category_id' => 11,
                'brand' => 'Logitech',
                'specifications' => json_encode([
                    'sensor' => 'Hero 2 32K',
                    'polling_rate' => '2000Hz',
                    'dpi' => '100 - 32,000',
                    'weight' => '63g',
                    'battery' => '95 hours',
                    'connectivity' => 'Lightspeed Wireless + USB-C',
                    'buttons' => '5 programmable',
                    'warranty' => '2 years'
                ]),
                'image_url' => 'https://example.com/images/logitech-gpro-superlight.jpg',
                'is_active' => true,
            ],

            // ========== COOLING (Category ID: 12) ==========
            [
                'name' => 'NZXT Kraken Elite 360 RGB',
                'description' => 'AIO liquid cooler 360mm, LCD display, RGB fans, untuk LGA1700/AM5',
                'price' => 3899000,
                'stock' => 10,
                'category_id' => 12,
                'brand' => 'NZXT',
                'specifications' => json_encode([
                    'type' => 'AIO Liquid Cooler',
                    'radiator_size' => '360mm',
                    'fans' => '3x 120mm RGB',
                    'pump_rpm' => '800 - 2800 RPM',
                    'socket_support' => 'Intel LGA1700, AMD AM5',
                    'display' => '2.36" LCD customizable',
                    'software' => 'NZXT CAM',
                    'warranty' => '6 years'
                ]),
                'image_url' => 'https://example.com/images/nzxt-kraken-elite.jpg',
                'is_active' => true,
            ]
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
