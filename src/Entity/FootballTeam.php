<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

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
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=TRUE)
     */
    public $Strip;

    /**
     * @ORM\Column(type="integer")
     */
    private $league_id;

    /**
     * @var FootballLeague
     * @ManyToOne(targetEntity="App\Entity\FootballLeague", inversedBy="football_teams")
     * @JoinColumn(name="football_league_id", referencedColumnName="id")
     */
    protected $group;

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
