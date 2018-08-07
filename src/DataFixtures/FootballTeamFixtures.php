<?php

namespace App\DataFixtures;

use App\Entity\FootballTeam;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FootballTeamFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Array of football leagues to be inserted
        $teams    = [
            // Premier League teams football_leagues.id = 1
            [
                'name'      => 'Arsenal',
                'league_id' => 1,
            ],
            [
                'name'      => 'Bournemouth',
                'league_id' => 1,
            ],
            [
                'name'      => 'Brighton',
                'league_id' => 1,
            ],
            [
                'name'      => 'Burnley',
                'league_id' => 1,
            ],
            [
                'name'      => 'Cardiff',
                'league_id' => 1,
            ],
            [
                'name'      => 'Chelsea',
                'league_id' => 1,
            ],
            [
                'name'      => 'Crystal Palace',
                'league_id' => 1,
            ],
            [
                'name'      => 'Everton',
                'league_id' => 1,
            ],
            [
                'name'      => 'Fulham',
                'league_id' => 1,
            ],
            [
                'name'      => 'Huddersfield',
                'league_id' => 1,
            ],
            [
                'name'      => 'Leicester',
                'league_id' => 1,
            ],
            [
                'name'      => 'Liverpool',
                'league_id' => 1,
            ],
            [
                'name'      => 'Man City',
                'league_id' => 1,
            ],
            [
                'name'      => 'Man Utd',
                'league_id' => 1,
            ],
            [
                'name'      => 'Newcastle',
                'league_id' => 1,
            ],
            [
                'name'      => 'Southampton',
                'league_id' => 1,
            ],
            [
                'name'      => 'Tottenham',
                'league_id' => 1,
            ],
            [
                'name'      => 'Watford',
                'league_id' => 1,
            ],
            [
                'name'      => 'West Ham',
                'league_id' => 1,
            ],
            [
                'name'      => 'Wolves',
                'league_id' => 1,
            ],
            // Championship teams football_leagues.id = 2
            [
                'name'      => 'Brentford',
                'league_id' => 2,
            ],
            [
                'name'      => 'Aston Villa',
                'league_id' => 2,
            ],
            [
                'name'      => 'Leeds',
                'league_id' => 2,
            ],
            [
                'name'      => 'Wigan',
                'league_id' => 2,
            ],
            [
                'name'      => 'Bolton',
                'league_id' => 2,
            ],
            [
                'name'      => 'Derby',
                'league_id' => 2,
            ],
            [
                'name'      => 'Swansea',
                'league_id' => 2,
            ],
            [
                'name'      => 'Preston North End',
                'league_id' => 2,
            ],
            [
                'name'      => 'Birmingham City',
                'league_id' => 2,
            ],
            [
                'name'      => 'Blackburn Rovers',
                'league_id' => 2,
            ],
            [
                'name'      => 'Ipswich Town',
                'league_id' => 2,
            ],
            [
                'name'      => 'Middlesbrough',
                'league_id' => 2,
            ],
            [
                'name'      => 'Millwall',
                'league_id' => 2,
            ],
            [
                'name'      => 'Norwich City',
                'league_id' => 2,
            ],
            [
                'name'      => 'Bristol City',
                'league_id' => 2,
            ],
            [
                'name'      => 'Nottingham Forest',
                'league_id' => 2,
            ],
            [
                'name'      => 'Sheffield Wednesday',
                'league_id' => 2,
            ],
            [
                'name'      => 'Reading',
                'league_id' => 2,
            ],
            [
                'name'      => 'Sheffield United',
                'league_id' => 2,
            ],
            [
                'name'      => 'West Bromwich Albion',
                'league_id' => 2,
            ],
            [
                'name'      => 'Queens Park Rangers',
                'league_id' => 2,
            ],
            [
                'name'      => 'Hull City',
                'league_id' => 2,
            ],
            [
                'name'      => 'Stoke City',
                'league_id' => 2,
            ],
            [
                'name'      => 'Rotherham United',
                'league_id' => 2,
            ]
        ];

        // Insert $leagues array into the `football_leagues` table
        foreach($teams as $league)
        {
            $footballTeam   = new FootballTeam();

            $footballTeam->setName($league['name']);
            $footballTeam->setLeagueId($league['league_id']);

            $manager->persist($footballTeam);
        }

        $manager->flush();
    }
}
