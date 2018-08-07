<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FootballLeagueRepository")
 */
class FootballLeague
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FootballTeam", inversedBy="relation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $football_team_id;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getFootballTeamId(): ?FootballTeam
    {
        return $this->football_team_id;
    }

    public function setFootballTeamId(?FootballTeam $football_team_id): self
    {
        $this->football_team_id = $football_team_id;

        return $this;
    }
}
