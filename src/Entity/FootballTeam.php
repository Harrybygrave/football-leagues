<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255)
     */
    private $Stip;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FootballLeague", mappedBy="football_team_id")
     */
    private $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

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

    public function getStip(): ?string
    {
        return $this->Stip;
    }

    public function setStip(string $Stip): self
    {
        $this->Stip = $Stip;

        return $this;
    }

    /**
     * @return Collection|FootballLeague[]
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(FootballLeague $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation[] = $relation;
            $relation->setFootballTeamId($this);
        }

        return $this;
    }

    public function removeRelation(FootballLeague $relation): self
    {
        if ($this->relation->contains($relation)) {
            $this->relation->removeElement($relation);
            // set the owning side to null (unless already changed)
            if ($relation->getFootballTeamId() === $this) {
                $relation->setFootballTeamId(null);
            }
        }

        return $this;
    }
}
