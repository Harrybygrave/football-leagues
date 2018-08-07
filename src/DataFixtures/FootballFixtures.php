<?php

namespace App\DataFixtures;

use App\Entity\FootballLeague;
use App\Entity\FootballTeam;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FootballFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $leagues    = [
            'Premier League' => [
                [
                    'name'      => 'Arsenal',
                ],
                [
                    'name'      => 'Bournemouth',
                ],
                [
                    'name'      => 'Brighton',
                ],
                [
                    'name'      => 'Burnley',
                ],
                [
                    'name'      => 'Cardiff',
                ],
                [
                    'name'      => 'Chelsea',
                ],
                [
                    'name'      => 'Crystal Palace',
                ],
                [
                    'name'      => 'Everton',
                ],
                [
                    'name'      => 'Fulham',
                ],
                [
                    'name'      => 'Huddersfield',
                ],
                [
                    'name'      => 'Leicester',
                ],
                [
                    'name'      => 'Liverpool',
                ],
                [
                    'name'      => 'Man City',
                ],
                [
                    'name'      => 'Man Utd',
                ],
                [
                    'name'      => 'Newcastle',
                ],
                [
                    'name'      => 'Southampton',
                ],
                [
                    'name'      => 'Tottenham',
                ],
                [
                    'name'      => 'Watford',
                ],
                [
                    'name'      => 'West Ham',
                ],
                [
                    'name'      => 'Wolves',
                ]
            ],
            'Championship'  => [
                [
                    'name'      => 'Brentford',
                ],
                [
                    'name'      => 'Aston Villa',
                ],
                [
                    'name'      => 'Leeds',
                ],
                [
                    'name'      => 'Wigan',
                ],
                [
                    'name'      => 'Bolton',
                ],
                [
                    'name'      => 'Derby',
                ],
                [
                    'name'      => 'Swansea',
                ],
                [
                    'name'      => 'Preston North End',
                ],
                [
                    'name'      => 'Birmingham City',
                ],
                [
                    'name'      => 'Blackburn Rovers',
                ],
                [
                    'name'      => 'Ipswich Town',
                ],
                [
                    'name'      => 'Middlesbrough',
                ],
                [
                    'name'      => 'Millwall',
                ],
                [
                    'name'      => 'Norwich City',
                ],
                [
                    'name'      => 'Bristol City',
                ],
                [
                    'name'      => 'Nottingham Forest',
                ],
                [
                    'name'      => 'Sheffield Wednesday',
                ],
                [
                    'name'      => 'Reading',
                ],
                [
                    'name'      => 'Sheffield United',
                ],
                [
                    'name'      => 'West Bromwich Albion',
                ],
                [
                    'name'      => 'Queens Park Rangers',
                ],
                [
                    'name'      => 'Hull City',
                ],
                [
                    'name'      => 'Stoke City',
                ],
                [
                    'name'      => 'Rotherham United',
                ]
            ]
        ];

        foreach($leagues as $league => $teams)
        {
            $footballLeague = new FootballLeague();

            $footballLeague->setName($league);

            $manager->persist($footballLeague);

            foreach($teams as $team)
            {
                $footballTeam   = new FootballTeam;

                $footballTeam->setName($team['name']);
                $footballTeam->setLeague($footballLeague);

                $manager->persist($footballTeam);
            }
        }

        $manager->flush();
    }
}
