<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Sauce;

class SauceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sauce = new Sauce();

        $sauce->setName("Blanche");
        $manager->persist($sauce);

        $manager->flush();
    }
}
