<?php

namespace App\Entity;

use App\Repository\DefiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DefiRepository::class)]
class Defi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_defi = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_defi = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_debut = null;



    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomDefi(): ?string
    {
        return $this->nom_defi;
    }

    public function setNomDefi(string $nom_defi): static
    {
        $this->nom_defi = $nom_defi;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }
}
