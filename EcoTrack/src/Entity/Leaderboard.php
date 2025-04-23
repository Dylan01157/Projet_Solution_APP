<?php

namespace App\Entity;

use App\Repository\LeaderboardRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeaderboardRepository::class)]
class Leaderboard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_classement = null;

    #[ORM\Column]
    private ?int $rang = null;

    #[ORM\Column]
    private ?int $score = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_classement = null;

    #[ORM\Column]
    private ?int $id_utilisateur = null;

    #[ORM\Column]
    private ?int $id_entreprise = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClassement(): ?int
    {
        return $this->id_classement;
    }

    public function setIdClassement(int $id_classement): static
    {
        $this->id_classement = $id_classement;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): static
    {
        $this->rang = $rang;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getDateClassement(): ?\DateTimeInterface
    {
        return $this->date_classement;
    }

    public function setDateClassement(\DateTimeInterface $date_classement): static
    {
        $this->date_classement = $date_classement;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(int $id_utilisateur): static
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function getIdEntreprise(): ?int
    {
        return $this->id_entreprise;
    }

    public function setIdEntreprise(int $id_entreprise): static
    {
        $this->id_entreprise = $id_entreprise;

        return $this;
    }
}
