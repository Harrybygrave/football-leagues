<?php

namespace App\DataFixtures;

use App\Entity\FootballLeague;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FootballLeagueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Array of football leagues to be inserted
        $leagues    = [
            'Premier League',
            'Championship'
        ];

        // Insert $leagues array into the `football_leagues` table
        foreach($leagues as $league)
        {
            $footballLeague = new FootballLeague();

            $footballLeague->setName($league);

            $manager->persist($footballLeague);
        }

        $manager->flush();
    }
}
