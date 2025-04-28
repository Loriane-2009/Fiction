<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = Story::create([
            'title' => 'La Quête du Trésor',
            'description' => 'Une aventure périlleuse à travers forêts et montagnes.'
        ]);

        $chapter1 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Début de l\'aventure',
            'content' => 'Vous quittez votre village pour partir à l\'aventure. Où allez-vous ?'
        ]);

        $chapter2 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'La forêt obscure',
            'content' => 'Vous entrez dans une forêt inquiétante...'
        ]);

        $chapter3 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'La montagne escarpée',
            'content' => 'Vous grimpez une montagne abrupte...'
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'Explorer la forêt',
            'next_chapter_id' => $chapter2->id
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'Grimper la montagne',
            'next_chapter_id' => $chapter3->id
        ]);
    }
}
