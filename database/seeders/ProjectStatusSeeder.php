<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use App\Models\Other\ProjectStatus;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default
        $items = [
            ['id' => 1, 'name' => 'Not Started', 'alias' => 'Pending',      'created_at' => now()],
            ['id' => 2, 'name' => 'Planning',    'alias' => 'Design Phase', 'created_at' => now()],
            ['id' => 3, 'name' => 'Ongoing',     'alias' => 'In Progress',  'created_at' => now()],
            ['id' => 4, 'name' => 'On Hold',     'alias' => 'Paused',       'created_at' => now()],
            ['id' => 5, 'name' => 'Blocked',     'alias' => 'Stalled',      'created_at' => now()],
            ['id' => 6, 'name' => 'Under Review','alias' => 'Quality Check','created_at' => now()],
            ['id' => 7, 'name' => 'Completed',   'alias' => 'Done',         'created_at' => now()],
            ['id' => 8, 'name' => 'Cancelled',   'alias' => 'Terminated',   'created_at' => now()],
        ];

        ProjectStatus::insert($items);
    }
}
