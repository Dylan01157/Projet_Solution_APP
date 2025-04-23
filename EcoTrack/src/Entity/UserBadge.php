<?php

namespace App\Entity;

use App\Repository\UserBadgeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserBadgeRepository::class)]
class UserBadge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_badge_utilisateur = null;

    #[ORM\Column]
    private ?int $id_utilisateur = null;

    #[ORM\Column]
    private ?int $id_badge = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBadgeUtilisateur(): ?int
    {
        return $this->id_badge_utilisateur;
    }

    public function setIdBadgeUtilisateur(int $id_badge_utilisateur): static
    {
        $this->id_badge_utilisateur = $id_badge_utilisateur;

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

    public function getIdBadge(): ?int
    {
        return $this->id_badge;
    }

    public function setIdBadge(int $id_badge): static
    {
        $this->id_badge = $id_badge;

        return $this;
    }
}
