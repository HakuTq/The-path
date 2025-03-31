<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterClass;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        CharacterClass::factory(5)->create();
    }
}
