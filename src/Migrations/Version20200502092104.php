<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200502092104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE city CHANGE name name VARCHAR(255) NOT NULL COMMENT \'Название города\'');
        $this->addSql('ALTER TABLE organisation CHANGE name name VARCHAR(255) NOT NULL COMMENT \'Название организации\', CHANGE area area VARCHAR(255) NOT NULL COMMENT \'Сфера деятельности\', CHANGE city_id city_id INT NOT NULL COMMENT \'Город\', CHANGE about about VARCHAR(255) DEFAULT NULL COMMENT \'Об организации\'');
        $this->addSql('ALTER TABLE task CHANGE name name VARCHAR(255) DEFAULT NULL COMMENT \'Нание задачи или мероприятия\', CHANGE task_funct task_funct VARCHAR(255) NOT NULL COMMENT \'функционал\', CHANGE count count INT DEFAULT NULL COMMENT \'сколько человек необходимо\', CHANGE date_start date_start DATE DEFAULT NULL COMMENT \'Дата с\', CHANGE date_end date_end DATE DEFAULT NULL COMMENT \'Дата до\'');
        $this->addSql('ALTER TABLE user ADD experience INT DEFAULT NULL, DROP position, CHANGE name name VARCHAR(255) NOT NULL COMMENT \'Имя\', CHANGE lastname lastname VARCHAR(255) DEFAULT NULL COMMENT \'Фамилия\', CHANGE phone phone VARCHAR(255) NOT NULL COMMENT \'Номер телефона\', CHANGE date_birth date_birth DATE NOT NULL COMMENT \'Дата рождения\', CHANGE city_id city_id INT NOT NULL COMMENT \'Город\', CHANGE description description VARCHAR(255) DEFAULT NULL COMMENT \'О себе\', CHANGE auth_vk auth_vk VARCHAR(255) DEFAULT NULL COMMENT \'сслыка в соц. сеть вк\', CHANGE email email VARCHAR(255) NOT NULL COMMENT \'Email\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE city CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE organisation CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE area area VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city_id city_id INT NOT NULL, CHANGE about about VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE task CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE task_funct task_funct VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE count count INT DEFAULT NULL, CHANGE date_start date_start DATE DEFAULT NULL, CHANGE date_end date_end DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD position VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP experience, CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date_birth date_birth DATE NOT NULL, CHANGE city_id city_id INT NOT NULL, CHANGE description description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE auth_vk auth_vk VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
