<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FootballTeamRepository")
 * @ORM\Table(name="football_teams")
 */
class FootballTeam
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
     * @ORM\Column(type="string", length=255, nullable=TRUE)
     */
    private $Strip;

    /**
     * @ORM\Column(type="integer")
     */
    private $league_id;

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

    public function getStrip(): ?string
    {
        return $this->Strip;
    }

    public function setStrip(string $Strip): self
    {
        $this->Strip = $Strip;

        return $this;
    }

    public function getLeagueId(): ?int
    {
        return $this->league_id;
    }

    public function setLeagueId(int $league_id): self
    {
        $this->league_id = $league_id;

        return $this;
    }
}
