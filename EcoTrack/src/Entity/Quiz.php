<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_questionnaire = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_questionnaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column]
    private ?int $score_total = null;

    #[ORM\Column]
    private ?int $id_utilisateur = null;

    #[ORM\Column]
    private ?int $id_question = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdQuestionnaire(): ?int
    {
        return $this->id_questionnaire;
    }

    public function setIdQuestionnaire(int $id_questionnaire): static
    {
        $this->id_questionnaire = $id_questionnaire;

        return $this;
    }

    public function getNomQuestionnaire(): ?string
    {
        return $this->nom_questionnaire;
    }

    public function setNomQuestionnaire(string $nom_questionnaire): static
    {
        $this->nom_questionnaire = $nom_questionnaire;

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

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getScoreTotal(): ?int
    {
        return $this->score_total;
    }

    public function setScoreTotal(int $score_total): static
    {
        $this->score_total = $score_total;

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

    public function getIdQuestion(): ?int
    {
        return $this->id_question;
    }

    public function setIdQuestion(int $id_question): static
    {
        $this->id_question = $id_question;

        return $this;
    }
}
