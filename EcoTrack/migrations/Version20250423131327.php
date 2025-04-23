<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250423131327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE badge (id INT AUTO_INCREMENT NOT NULL, id_badge INT NOT NULL, nom_badge VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date_obtention DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, id_entreprise INT NOT NULL, nom_entreprise VARCHAR(255) NOT NULL, secteur_activite VARCHAR(255) NOT NULL, taille VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE leaderboard (id INT AUTO_INCREMENT NOT NULL, id_classement INT NOT NULL, rang INT NOT NULL, score INT NOT NULL, date_classement DATE NOT NULL, id_utilisateur INT NOT NULL, id_entreprise INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_badge (id INT AUTO_INCREMENT NOT NULL, id_badge_utilisateur INT NOT NULL, id_utilisateur INT NOT NULL, id_badge INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE defi ADD date_fin DATE NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE badge
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE company
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE leaderboard
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_badge
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE defi DROP date_fin
        SQL);
    }
}
