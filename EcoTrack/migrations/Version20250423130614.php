<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250423130614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE answer (id INT AUTO_INCREMENT NOT NULL, id_reponse INT NOT NULL, text_reponse VARCHAR(255) NOT NULL, date DATE NOT NULL, en_cours TINYINT(1) NOT NULL, id_categorie INT NOT NULL, id_utilisateur INT NOT NULL, id_question INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE carbon_footprint (id INT AUTO_INCREMENT NOT NULL, id_empreinte INT NOT NULL, valeur_carbone NUMERIC(6, 3) NOT NULL, date DATE NOT NULL, id_utilisateur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, id_categorie INT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, description_categorie VARCHAR(255) NOT NULL, score_categorie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE defi (id INT AUTO_INCREMENT NOT NULL, id_defi INT NOT NULL, nom_defi VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE questions (id INT AUTO_INCREMENT NOT NULL, id_question INT NOT NULL, texte_question VARCHAR(255) NOT NULL, type_question VARCHAR(255) NOT NULL, frequence VARCHAR(255) NOT NULL, score_question INT NOT NULL, id_questionnaire INT NOT NULL, id_categorie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE quiz (id INT AUTO_INCREMENT NOT NULL, id_questionnaire INT NOT NULL, nom_questionnaire VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, score_total INT NOT NULL, id_utilisateur INT NOT NULL, id_question INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_defi (id INT AUTO_INCREMENT NOT NULL, id_utilisateur_defi INT NOT NULL, en_cours TINYINT(1) NOT NULL, score_defi INT NOT NULL, id_defi INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD id_utilisateur INT NOT NULL, ADD id_entreprise INT NOT NULL, ADD id_recompenses INT NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE answer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE carbon_footprint
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE defi
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE questions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE quiz
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_defi
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user DROP id_utilisateur, DROP id_entreprise, DROP id_recompenses
        SQL);
    }
}
