<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220907154908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departamentos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departamentos_user (departamentos_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_1CC2C46D7422D378 (departamentos_id), INDEX IDX_1CC2C46DA76ED395 (user_id), PRIMARY KEY(departamentos_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE departamentos_user ADD CONSTRAINT FK_1CC2C46D7422D378 FOREIGN KEY (departamentos_id) REFERENCES departamentos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE departamentos_user ADD CONSTRAINT FK_1CC2C46DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departamentos_user DROP FOREIGN KEY FK_1CC2C46D7422D378');
        $this->addSql('DROP TABLE departamentos');
        $this->addSql('DROP TABLE departamentos_user');
    }
}
