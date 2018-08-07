<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FootballTeam", mappedBy="league")
     */
    private $footballTeams;

    public function __construct()
    {
        $this->footballTeams = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|FootballTeam[]
     */
    public function getFootballTeams(): Collection
    {
        return $this->footballTeams;
    }

    public function addFootballTeam(FootballTeam $footballTeam): self
    {
        if (!$this->footballTeams->contains($footballTeam)) {
            $this->footballTeams[] = $footballTeam;
            $footballTeam->setLeague($this);
        }

        return $this;
    }

    public function removeFootballTeam(FootballTeam $footballTeam): self
    {
        if ($this->footballTeams->contains($footballTeam)) {
            $this->footballTeams->removeElement($footballTeam);
            // set the owning side to null (unless already changed)
            if ($footballTeam->getLeague() === $this) {
                $footballTeam->setLeague(null);
            }
        }

        return $this;
    }
}
