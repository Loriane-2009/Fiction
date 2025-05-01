<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

class TourAbandonneeSeeder extends Seeder
{
    public function run(): void
    {
        $story = Story::create([
            'title' => 'La Tour Abandonnée',
            'description' => 'Une tour solitaire au sommet d\'une colline... mais que cache-t-elle ?',
        ]);

        $chapter1 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Entrée dans la tour',
            'content' => 'Deux escaliers : l\'un monte vers le sommet, l\'autre descend sous la terre.',
        ]);

        $chapter2 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Le sommet venteux',
            'content' => 'Arrivé en haut, la tour tremble sous le vent violent.',
        ]);

        $chapter3 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'La chambre mystérieuse',
            'content' => 'Une pièce sombre pleine d\'artefacts anciens.',
        ]);

        $chapter4 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Le trésor caché',
            'content' => 'Un coffre rempli d\'or t\'attend au fond de la chambre.',
        ]);

        $chapter5 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'L\'effondrement',
            'content' => 'La tour s\'effondre sous tes pieds. Tu n\'y survivras pas.',
        ]);

        // Choices
        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'Monter vers le sommet',
            'next_chapter_id' => $chapter2->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'Descendre dans les sous-sols',
            'next_chapter_id' => $chapter3->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2->id,
            'choice_text' => 'Explorer le sommet',
            'next_chapter_id' => $chapter5->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2->id,
            'choice_text' => 'Redescendre',
            'next_chapter_id' => $chapter3->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter3->id,
            'choice_text' => 'Ouvrir un coffre ancien',
            'next_chapter_id' => $chapter4->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter3->id,
            'choice_text' => 'Ignorer les artefacts',
            'next_chapter_id' => $chapter5->id,
        ]);
    }
}
