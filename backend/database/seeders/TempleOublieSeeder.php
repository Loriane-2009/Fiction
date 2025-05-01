<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

// Chapitre 1 : Devant le temple
// ├── Chapitre 2 : Entrée principale (piège)
// │   ├── Chapitre 4 : Salle d’énigme
// │   │   ├── Chapitre 7 : Salle au trésor (victoire)
// │   │   └── Chapitre 8 : Effondrement (échec)
// │   └── Chapitre 5 : Galerie secrète
// │       └── Chapitre 9 : Sortie secondaire (semi-victoire)
// └── Chapitre 3 : Passage étroit (souterrain)
//     ├── Chapitre 6 : Puits maudit (échec)
//     └── Chapitre 10 : Sanctuaire caché
//         ├── Chapitre 7 (partagé) : Salle au trésor (victoire)
//         └── Chapitre 8 (partagé) : Effondrement (échec)




class TempleOublieSeeder extends Seeder
{
    public function run(): void
    {
        $story = Story::create([
            'title' => 'Le Temple Oublié',
            'description' => 'Une aventure riche en pièges, énigmes et décisions périlleuses dans un ancien temple perdu.',
        ]);

        // CHAPITRES

        $c1 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Devant le temple',
            'content' => 'Tu arrives devant un temple enfoui sous la végétation. Deux entrées : la grande porte ou un passage étroit à moitié effondré.',
        ]);

        $c2 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Entrée principale',
            'content' => 'La porte grince… tu entres dans une salle immense. Le sol semble instable et des dalles s’enfoncent sous ton poids.',
        ]);

        $c3 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Passage étroit',
            'content' => 'Tu rampes sous les rochers. C\'est sombre, tu entends un bruit d’eau qui coule quelque part…',
        ]);

        $c4 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Salle d’énigme',
            'content' => 'Tu arrives dans une salle éclairée par une lueur étrange. Sur le mur : "Je ne suis vivant que lorsque je suis consommé. Qui suis-je ?" Deux statues t’attendent.',
        ]);

        $c5 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Galerie secrète',
            'content' => 'Un passage secret s’ouvre sur ta gauche. Tu longes un tunnel couvert de fresques anciennes.',
        ]);

        $c6 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Puits maudit',
            'content' => 'Tu glisses sur une pierre humide et tombes dans un puits sans fond. Tu n’auras pas de seconde chance.',
        ]);

        $c7 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Salle au trésor',
            'content' => 'Une porte s’ouvre. Le sol est recouvert d’or, de pierres précieuses et d’objets anciens. Tu as trouvé le cœur du temple !',
        ]);

        $c8 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Effondrement',
            'content' => 'La salle tremble. Le plafond s’effondre sur toi. C’est la fin.',
        ]);

        $c9 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Sortie secondaire',
            'content' => 'Tu trouves une issue dérobée donnant sur la jungle. Tu pars avec quelques artefacts, sain et sauf.',
        ]);

        $c10 = Chapter::create([
            'story_id' => $story->id,
            'title' => 'Sanctuaire caché',
            'content' => 'Tu découvres une pièce circulaire, calme, avec une statue au centre qui tient un objet lumineux. Une dernière décision t’attend.',
        ]);

        // CHOIX

        // Chapitre 1
        Choice::create(['chapter_id' => $c1->id, 'choice_text' => 'Entrer par la grande porte', 'next_chapter_id' => $c2->id]);
        Choice::create(['chapter_id' => $c1->id, 'choice_text' => 'Passer par le tunnel étroit', 'next_chapter_id' => $c3->id]);

        // Chapitre 2
        Choice::create(['chapter_id' => $c2->id, 'choice_text' => 'Suivre les dalles intactes', 'next_chapter_id' => $c4->id]);
        Choice::create(['chapter_id' => $c2->id, 'choice_text' => 'Forcer le mur à gauche', 'next_chapter_id' => $c5->id]);

        // Chapitre 3
        Choice::create(['chapter_id' => $c3->id, 'choice_text' => 'Suivre le bruit de l’eau', 'next_chapter_id' => $c10->id]);
        Choice::create(['chapter_id' => $c3->id, 'choice_text' => 'Escalader les pierres', 'next_chapter_id' => $c6->id]);

        // Chapitre 4 (énigme)
        Choice::create(['chapter_id' => $c4->id, 'choice_text' => 'Choisir la statue "le feu"', 'next_chapter_id' => $c7->id]);
        Choice::create(['chapter_id' => $c4->id, 'choice_text' => 'Choisir la statue "le souffle"', 'next_chapter_id' => $c8->id]);

        // Chapitre 5
        Choice::create(['chapter_id' => $c5->id, 'choice_text' => 'Continuer dans la galerie', 'next_chapter_id' => $c9->id]);

        // Chapitre 10
        Choice::create(['chapter_id' => $c10->id, 'choice_text' => 'Prendre l’objet', 'next_chapter_id' => $c7->id]);
        Choice::create(['chapter_id' => $c10->id, 'choice_text' => 'Ignorer et repartir', 'next_chapter_id' => $c8->id]);
    }
}
