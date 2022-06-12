<?php

namespace App\DataFixtures;

use App\Entity\Tool;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ToolFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $tool = new Tool();
            $tool->setToolName('Tool n°' . $i);
            $tool->setImage('https://placeimg.com/500/500/animals');
            $manager->persist($tool);
        }
        $manager->flush();
    }
}
