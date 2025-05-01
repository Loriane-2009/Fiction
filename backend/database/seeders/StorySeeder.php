<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TempleOublieSeeder::class,
            TourAbandonneeSeeder::class,
            OasisMauditeSeeder::class,
        ]);
    }
}
