<?php

namespace App\Controller;

use App\Entity\FootballLeague;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FootballLeagueController extends Controller
{
    /**
     * @Route("/football-league", name="football_league_list")
     */
    public function list()
    {
        $footballLeagues    = $this->getDoctrine()
                                ->getRepository(FootballLeague::class)
                                ->findAll();

        if(!$footballLeagues)
        {
            $response   = new JsonResponse('Error');
        }

         $response  = new JsonResponse($footballLeagues);

         return $response;
    }
    /**
     * @Route("/football-league/{id}", name="football_league_single")
     */
    public function single($id)
    {
        $footballLeague    = $this->getDoctrine()
                                ->getRepository(FootballLeague::class)
                                ->find($id);

        if(!$footballLeague)
        {
            $response   = new JsonResponse('Error');
        }

         $response  = new JsonResponse($footballLeague->getTeams());

         return $response;
    }
}
