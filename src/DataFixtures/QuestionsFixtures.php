<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class QuestionsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $quizzes = [
                [
                    'question' => 'Quel est le héros de la série de jeux vidéo d\'action "God of War" ?',
                    'theme' => 'Action',
                    'choices' => ['Kratos', 'Zeus', 'Ares', 'Athena'],
                    'answer' => 'Kratos'
                ],
                [
                    'question' => 'Quelle est la profession de Nathan Drake dans la série "Uncharted" ?',
                    'theme' => 'Action',
                    'choices' => ['Chasseur de trésors', 'Détective privé', 'Archéologue', 'Reporter'],
                    'answer' => 'Chasseur de trésors'
                ],
                [
                    'question' => 'Dans "Assassin\'s Creed", quel est l\'objet permettant de revivre les souvenirs d\'ancêtres ?',
                    'choices' => ['Animus', 'Amulet', 'Assassin\'s Ring', 'Aegis'],
                    'answer' => 'Animus',
                    'theme' => 'Action'
                ],
                [
                    'question' => 'Quel super-héros est le personnage principal dans la série de jeux "Batman: Arkham" ?',
                    'choices' => ['Superman', 'Spiderman', 'Batman', 'Flash'],
                    'answer' => 'Batman',
                    'theme' => 'Action'
                ],
                [
                    'question' => 'Dans quel jeu d\'aventure contrôle-t-on un personnage nommé Link ?',
                    'choices' => ['Zelda', 'Super Mario Bros', 'Metroid', 'Kirby'],
                    'answer' => 'Zelda',
                    'theme' => 'Aventure'
                ],
                [
                    'question' => 'Quel est le nom de l\'île dans "Tomb Raider" (2013) ?',
                    'choices' => ['Yamatai', 'Hokkaido', 'Kyushu', 'Shikoku'],
                    'answer' => 'Yamatai',
                    'theme' => 'Aventure'
                ],
                [
                    'question' => 'Quel animal est Sonic dans le jeu "Sonic the Hedgehog" ?',
                    'choices' => ['Un hérisson', 'Un renard', 'Un chien', 'Un chat'],
                    'answer' => 'Un hérisson',
                    'theme' => 'Aventure'
                ],
                [
                    'question' => 'Qui est le créateur de la série "Metal Gear" ?',
                    'choices' => ['Hideo Kojima', 'Shigeru Miyamoto', 'Satoshi Tajiri', 'Masahiro Sakurai'],
                    'answer' => 'Hideo Kojima',
                    'theme' => 'Aventure'
                ],
                [
                    'question' => 'Quelle série de jeux de combat comprend des personnages tels que Ryu et Ken ?',
                    'choices' => ['Street Fighter', 'Tekken', 'Mortal Kombat', 'Dragon Ball Z'],
                    'answer' => 'Street Fighter',
                    'theme' => 'Combat'
                ],
                [
                    'question' => 'Quel personnage de "Super Smash Bros." est également le personnage principal de la série "Metroid" ?',
                    'choices' => ['Samus', 'Link', 'Mario', 'Donkey Kong'],
                    'answer' => 'Samus',
                    'theme' => 'Combat'
                ],
                [
                    'question' => 'Dans quel jeu de combat contrôlez-vous des Pokémon pour combattre ?',
                    'choices' => ['Pokémon Stadium', 'Pokémon GO', 'Pokkén Tournament', 'Pokémon Snap'],
                    'answer' => 'Pokkén Tournament',
                    'theme' => 'Combat'
                ],
                [
                    'question' => 'Quel est le nom du tournoi dans la série "Tekken" ?',
                    'choices' => ['Iron Fist Tournament', 'World Martial Arts Tournament', 'King of Iron Tournament', 'Fist of Fury Tournament'],
                    'answer' => 'Iron Fist Tournament',
                    'theme' => 'Combat'
                ],
                [
                    'question' => 'Dans quel jeu de course peut-on utiliser des objets comme des carapaces de tortue pour ralentir les adversaires ?',
                    'choices' => ['Mario Kart', 'Forza Horizon', 'Gran Turismo', 'Need for Speed'],
                    'answer' => 'Mario Kart',
                    'theme' => 'Course'
                ],
                [
                    'question' => 'Quel est le nom du pilote principal dans la série "F-Zero" ?',
                    'choices' => ['Captain Falcon', 'Sonic', 'Master Chief', 'Link'],
                    'answer' => 'Captain Falcon',
                    'theme' => 'Course'
                ],
                [
                    'question' => 'Quelle entreprise développe la série "Forza" ?',
                    'choices' => ['Playground Games', 'Polyphony Digital', 'Ghost Games', 'Codemasters'],
                    'answer' => 'Playground Games',
                    'theme' => 'Course'
                ],
                [
                    'question' => 'Quelle série de jeux de course est connue pour son réalisme et sa simulation de conduite ?',
                    'choices' => ['Gran Turismo', 'Mario Kart', 'Burnout', 'Ridge Racer'],
                    'answer' => 'Gran Turismo',
                    'theme' => 'Course'
                ],
                [
                    'question' => 'Dans quel FPS jouez-vous en tant que membre d\'une équipe de contre-terroristes ?',
                    'choices' => ['Counter-Strike', 'Call of Duty', 'Battlefield', 'Halo'],
                    'answer' => 'Counter-Strike',
                    'theme' => 'FPS'
                ],
                [
                    'question' => 'Quel est le nom du protagoniste principal de la série "Half-Life" ?',
                    'choices' => ['Gordon Freeman', 'Samus Aran', 'Marcus Fenix', 'John-117'],
                    'answer' => 'Gordon Freeman',
                    'theme' => 'FPS'
                ],
                [
                    'question' => 'Dans quel FPS combattez-vous une invasion d\'aliens appelés les Covenants ?',
                    'choices' => ['Halo', 'Destiny', 'Doom', 'Titanfall'],
                    'answer' => 'Halo',
                    'theme' => 'FPS'
                ],
                [
                    'question' => 'Quel est le nom du robot compagnon dans le jeu "Portal" ?',
                    'choices' => ['GLaDOS', 'Cortana', 'Claptrap', 'BT-7274'],
                    'answer' => 'GLaDOS',
                    'theme' => 'FPS'
                ],
                [
                    'question' => 'Dans quel jeu de gestion construisez-vous et gérez un parc d\'attractions ?',
                    'choices' => ['RollerCoaster Tycoon', 'The Sims', 'Farmville', 'Minecraft'],
                    'answer' => 'RollerCoaster Tycoon',
                    'theme' => 'Gestion'
                ],
                [
                    'question' => 'Quel est le créateur du jeu de simulation de vie "The Sims" ?',
                    'choices' => ['Will Wright', 'Sid Meier', 'Peter Molyneux', 'Markus Persson'],
                    'answer' => 'Will Wright',
                    'theme' => 'Gestion'
                ],
                [
                    'question' => 'Dans quel jeu de gestion êtes-vous responsable de la construction et de la gestion d\'une ville ?',
                    'choices' => ['SimCity', 'Civilization', 'Age of Empires', 'Anno'],
                    'answer' => 'SimCity',
                    'theme' => 'Gestion'
                ],
                [
                    'question' => 'Dans quel jeu de gestion devez-vous survivre sur une île déserte en utilisant les ressources disponibles ?',
                    'choices' => ['Animal Crossing: New Horizons', 'Minecraft', 'The Forest', 'Rust'],
                    'answer' => 'Animal Crossing: New Horizons',
                    'theme' => 'Gestion'
                ]
        ];


        foreach ($quizzes as $question){
            $Newquestion = new question();
            $Newquestion->setIntitule($question['question']);
            $Newquestion->setTheme($this->getReference($question['theme']));
            foreach ($question['choices'] as $response) {
                $Newresponse = new \App\Entity\Reponse();
                $Newresponse->setIntitule($response);
                $Newresponse->setQuestion($Newquestion);
                $Newresponse->setIsCOrrect(false);
                if ($response == $question['answer']) {
                    $Newresponse->setIsCOrrect(true);
                }
                $manager->persist($Newresponse);
            }
            $manager->persist($Newquestion);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return[
            ThemesFixtures::class
        ];
    }
}
