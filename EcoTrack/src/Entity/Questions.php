<?php

namespace App\Entity;

use App\Repository\QuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionsRepository::class)]
class Questions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_question = null;

    #[ORM\Column(length: 255)]
    private ?string $texte_question = null;

    #[ORM\Column(length: 255)]
    private ?string $type_question = null;

    #[ORM\Column(length: 255)]
    private ?string $frequence = null;

    #[ORM\Column]
    private ?int $score_question = null;

    #[ORM\Column]
    private ?int $id_questionnaire = null;

    #[ORM\Column]
    private ?int $id_categorie = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTexteQuestion(): ?string
    {
        return $this->texte_question;
    }

    public function setTexteQuestion(string $texte_question): static
    {
        $this->texte_question = $texte_question;

        return $this;
    }

    public function getTypeQuestion(): ?string
    {
        return $this->type_question;
    }

    public function setTypeQuestion(string $type_question): static
    {
        $this->type_question = $type_question;

        return $this;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(string $frequence): static
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getScoreQuestion(): ?int
    {
        return $this->score_question;
    }

    public function setScoreQuestion(int $score_question): static
    {
        $this->score_question = $score_question;

        return $this;
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

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): static
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }
}
