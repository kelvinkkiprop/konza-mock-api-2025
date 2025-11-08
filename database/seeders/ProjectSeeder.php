<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use App\Models\Main\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default
        $items = [
            [
                'name' => 'Smart City Data Center',
                'description' => 'Deployment of next-gen data center for Konza City',
                'status_id' => 3,
                'start_date' => '2025-01-15',
                'end_date' => '2025-12-31',
                'picture' => 'https://oss.konza.go.ke/assets/images/Konza_OSS1.png',
                'created_at' => now(),
            ],
            [
                'name' => 'Intelligent Transport System',
                'description' => 'Smart traffic management implementation',
                'status_id' => 2,
                'start_date' => '2025-03-01',
                'end_date' => '2025-10-30',
                'picture' => 'https://oss.konza.go.ke/assets/images/Konza_OSS2.png',
                'created_at' => now(),
            ],
            [
                'name' => 'Smart Grid Integration',
                'description' => 'Renewable energy and grid automation project',
                'status_id' => 1,
                'start_date' => '2025-06-01',
                'end_date' => '2025-11-30',
                'picture' => 'https://oss.konza.go.ke/assets/images/Konza_OSS3.png',
                'created_at' => now(),
            ],
            [
                'name' => 'Integrated Command Center',
                'description' => 'Centralized monitoring for city operations',
                'status_id' => 4,
                'start_date' => '2025-02-01',
                'end_date' => '2025-09-30',
                'picture' => 'https://oss.konza.go.ke/assets/images/Konza_OSS4.png',
                'created_at' => now(),
            ],
            [
                'name' => 'Urban Design & Digital Masterplan',
                'description' => 'City-wide planning and design using GIS & IoT',
                'status_id' => 5,
                'start_date' => '2025-01-01',
                'end_date' => '2025-12-31',
                'picture' => 'https://oss.konza.go.ke/assets/images/Konza_OSS5.png',
                'created_at' => now(),
            ],
            [
                'name' => 'Citywide IoT Sensors Deployment',
                'description' => 'Installation of IoT sensors for traffic, pollution, and energy monitoring',
                'status_id' => 2,
                'start_date' => '2025-04-01',
                'end_date' => '2025-12-15',
                'picture' => 'https://oss.konza.go.ke/assets/images/Konza_OSS6.png',
                'created_at' => now(),
            ],
        ];
        Project::insert($items);

    }
}
