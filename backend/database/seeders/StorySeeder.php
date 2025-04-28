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
            'title' => 'À l\'orée de la forêt',
            'description' => 'Une courte aventure à la lisière d\'une forêt mystérieuse.',
        ]);

        $chapter1 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Entrée de la forêt',
            'content' => 'Tu te tiens à l\'entrée d\'une vieille forêt mystérieuse. Deux chemins s\'offrent à toi.',
        ]);

        $chapter2 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Sentier éclairé',
            'content' => 'La lumière filtre à travers les arbres. Un elfe t\'accueille. Il t\'offre un bijou magique.',
        ]);

        $chapter3 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Obscurité',
            'content' => 'La nuit t\'enveloppe. Tu entends des grognements... Un loup surgit !',
        ]);

        $chapter4 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Acceptation',
            'content' => 'Tu acceptes le bijou. Ta force augmente ! (FIN)',
        ]);

        $chapter5 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Refus',
            'content' => 'Tu refuses poliment et continues ta route. (FIN)',
        ]);

        $chapter6 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Fuite',
            'content' => 'Tu fuis rapidement et rejoins ton village sain et sauf. (FIN)',
        ]);

        $chapter7 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Combat',
            'content' => 'Tu combats le loup, mais tu es blessé. (FIN)',
        ]);

        // Choix du chapitre 1
        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'Prendre le sentier éclairé',
            'next_chapter_id' => $chapter2->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'S\'enfoncer dans l\'obscurité',
            'next_chapter_id' => $chapter3->id,
        ]);

        // Choix du chapitre 2
        Choice::create([
            'chapter_id' => $chapter2->id,
            'choice_text' => 'Accepter le bijou',
            'next_chapter_id' => $chapter4->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2->id,
            'choice_text' => 'Refuser poliment',
            'next_chapter_id' => $chapter5->id,
        ]);

        // Choix du chapitre 3
        Choice::create([
            'chapter_id' => $chapter3->id,
            'choice_text' => 'Fuir',
            'next_chapter_id' => $chapter6->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter3->id,
            'choice_text' => 'Combattre',
            'next_chapter_id' => $chapter7->id,
        ]);
    }
}
