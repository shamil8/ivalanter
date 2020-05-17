<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200516080252 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE organisation CHANGE city_id city_id INT NOT NULL');
        $this->addSql('ALTER TABLE organisation ADD CONSTRAINT FK_E6E132B48BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_E6E132B48BAC62AF ON organisation (city_id)');
        $this->addSql('ALTER TABLE user CHANGE experience experience INT DEFAULT NULL COMMENT \'Стаж волонтера (сколько лет)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE organisation DROP FOREIGN KEY FK_E6E132B48BAC62AF');
        $this->addSql('DROP INDEX IDX_E6E132B48BAC62AF ON organisation');
        $this->addSql('ALTER TABLE organisation CHANGE city_id city_id INT NOT NULL COMMENT \'Город\'');
        $this->addSql('ALTER TABLE user CHANGE experience experience INT DEFAULT NULL');
    }
}
