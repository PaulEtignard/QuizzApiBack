<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ThemesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $themes = [
            'Action',
            'Aventure',
            'Combat',
            'Course',
            'FPS',
            'Gestion'
        ];
       foreach ($themes as $theme) {
            $newTheme = new Theme();
            $newTheme->setIntitule($theme);
            $this->addReference($theme, $newTheme);
            $manager->persist($newTheme);
        }

        $manager->flush();
    }

}
