<?php

namespace BadgeBundle\DataFixture\ORM;

use BadgeBundle\Entity\Badge;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBadgeData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $badges = [
            ['cr5', '5 code reviews'],
            ['cr10', '10 code reviews'],
            ['cr50', '50 code reviews'],
            ['cr100', '100 code reviews'],
            ['cr500', '500 code reviews'],
            ['cr1000', '1000 code reviews'],
            ['cr5000', '5000 code reviews'],
        ];

        foreach ($badges as $badge) {
            $newBadge = new Badge($badge[0], $badge[1]);
            $manager->persist($newBadge);
        }

        $manager->flush();
    }
}
