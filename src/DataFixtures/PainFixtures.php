<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pain;

class PainFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pain = new Pain();

        $pain->setName("Pain Classique");
        $manager->persist($pain);

        $manager->flush();
    }
}
