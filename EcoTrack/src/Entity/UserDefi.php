<?php

namespace App\Entity;

use App\Repository\UserDefiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserDefiRepository::class)]
class UserDefi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_utilisateur_defi = null;

    #[ORM\Column]
    private ?bool $en_cours = null;

    #[ORM\Column]
    private ?int $score_defi = null;

    #[ORM\Column]
    private ?int $id_defi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateurDefi(): ?int
    {
        return $this->id_utilisateur_defi;
    }

    public function setIdUtilisateurDefi(int $id_utilisateur_defi): static
    {
        $this->id_utilisateur_defi = $id_utilisateur_defi;

        return $this;
    }

    public function isEnCours(): ?bool
    {
        return $this->en_cours;
    }

    public function setEnCours(bool $en_cours): static
    {
        $this->en_cours = $en_cours;

        return $this;
    }

    public function getScoreDefi(): ?int
    {
        return $this->score_defi;
    }

    public function setScoreDefi(int $score_defi): static
    {
        $this->score_defi = $score_defi;

        return $this;
    }

    public function getIdDefi(): ?int
    {
        return $this->id_defi;
    }

    public function setIdDefi(int $id_defi): static
    {
        $this->id_defi = $id_defi;

        return $this;
    }
}
