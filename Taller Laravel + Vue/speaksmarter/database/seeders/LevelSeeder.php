<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::created([
            'name' => 'A1'
        ]);
        Level::created([
            'name' => 'A2'
        ]);
        Level::created([
            'name' => 'B1'
        ]);
        Level::created([
            'name' => 'B2'
        ]);
        Level::created([
            'name' => 'C1'
        ]);
        Level::created([
            'name' => 'C2'
        ]);
    }
}
