<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

class OasisMauditeSeeder extends Seeder
{
    public function run(): void
    {
        $story = Story::create([
            'title' => 'L\'Oasis Maudite',
            'description' => 'Dans le désert, une oasis te tente... mais est-ce réel ?',
        ]);

        $chapter1 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Découverte de l\'oasis',
            'content' => 'Une oasis apparaît au loin, mirage ou réalité ?',
        ]);

        $chapter2 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Le mirage trompeur',
            'content' => 'Le mirage t\'attire dans le désert infini.',
        ]);

        $chapter3 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'La source cachée',
            'content' => 'Tu trouves une véritable source d\'eau.',
        ]);

        $chapter4 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'La cité antique',
            'content' => 'La vraie cité apparaît et tu y es accueilli en héros.',
        ]);

        $chapter5 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'La soif mortelle',
            'content' => 'La chaleur écrasante t\'emporte. Fin tragique.',
        ]);

        // Choices
        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'S\'approcher de l\'oasis',
            'next_chapter_id' => $chapter2->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'choice_text' => 'Ignorer et continuer',
            'next_chapter_id' => $chapter3->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2->id,
            'choice_text' => 'Suivre le mirage',
            'next_chapter_id' => $chapter5->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter3->id,
            'choice_text' => 'Boire à la source',
            'next_chapter_id' => $chapter4->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter3->id,
            'choice_text' => 'Continuer à pied sans boire',
            'next_chapter_id' => $chapter5->id,
        ]);
    }
}
