<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FootballTeamRepository")
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Strip;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FootballLeague", inversedBy="footballTeams")
     */
    private $league;

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

    public function setStrip(?string $Strip): self
    {
        $this->Strip = $Strip;

        return $this;
    }

    public function getLeague(): ?FootballLeague
    {
        return $this->league;
    }

    public function setLeague(?FootballLeague $league): self
    {
        $this->league = $league;

        return $this;
    }
}
