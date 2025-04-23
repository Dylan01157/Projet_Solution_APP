<?php

namespace App\Entity;

use App\Repository\CarbonFootprintRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarbonFootprintRepository::class)]
class CarbonFootprint
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_empreinte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 3)]
    private ?string $valeur_carbone = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $id_utilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEmpreinte(): ?int
    {
        return $this->id_empreinte;
    }

    public function setIdEmpreinte(int $id_empreinte): static
    {
        $this->id_empreinte = $id_empreinte;

        return $this;
    }

    public function getValeurCarbone(): ?string
    {
        return $this->valeur_carbone;
    }

    public function setValeurCarbone(string $valeur_carbone): static
    {
        $this->valeur_carbone = $valeur_carbone;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

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
}
