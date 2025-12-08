<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        LevelSeeder::class,
        RoleSeeder::class,
        UserSeeder::class
        ]);
    }
}
// CURSO VOY POR CLASE 2 MINUTO 40