<?php

namespace App\Entity;

use App\Repository\BadgeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BadgeRepository::class)]
class Badge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_badge = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_badge = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_obtention = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomBadge(): ?string
    {
        return $this->nom_badge;
    }

    public function setNomBadge(string $nom_badge): static
    {
        $this->nom_badge = $nom_badge;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateObtention(): ?\DateTimeInterface
    {
        return $this->date_obtention;
    }

    public function setDateObtention(\DateTimeInterface $date_obtention): static
    {
        $this->date_obtention = $date_obtention;

        return $this;
    }
}
