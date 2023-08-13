<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220831145520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jornada (id INT AUTO_INCREMENT NOT NULL, usuario_id_id INT NOT NULL, hora DATETIME NOT NULL, observaciones LONGTEXT DEFAULT NULL, tipo TINYINT(1) NOT NULL, INDEX IDX_61D21CBF629AF449 (usuario_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nombre VARCHAR(50) NOT NULL, apellidos VARCHAR(100) NOT NULL, activo TINYINT(1) DEFAULT NULL, bloqueado TINYINT(1) DEFAULT NULL, dni VARCHAR(15) DEFAULT NULL, fnacimiento DATE DEFAULT NULL, lnacimiento VARCHAR(80) DEFAULT NULL, sexo VARCHAR(10) DEFAULT NULL, nacionalidad VARCHAR(80) DEFAULT NULL, est_civil VARCHAR(20) DEFAULT NULL, perm_conducir VARCHAR(20) DEFAULT NULL, vehi_prop TINYINT(1) DEFAULT NULL, vehi_emp TINYINT(1) DEFAULT NULL, telefono VARCHAR(20) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE jornada ADD CONSTRAINT FK_61D21CBF629AF449 FOREIGN KEY (usuario_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jornada DROP FOREIGN KEY FK_61D21CBF629AF449');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE jornada');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
    }
}
