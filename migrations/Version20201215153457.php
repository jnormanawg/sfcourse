<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215153457 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Organization (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE TEPSITE (id INT AUTO_INCREMENT NOT NULL, T_EP_SITE_EP_ID INT NOT NULL, SITE VARCHAR(255) NOT NULL, DM_SITE_DESC VARCHAR(255) NOT NULL, XXAWG_STORE_NAME VARCHAR(255) NOT NULL, XXAWG_STORE_CITY VARCHAR(255) DEFAULT NULL, XXAWG_STORE_ADD VARCHAR(255) DEFAULT NULL, XXAWG_STORE_PHONE VARCHAR(255) DEFAULT NULL, XXAWG_STORE_ZIP VARCHAR(255) NOT NULL, T_EP_PARENT_STORE_ID INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE reports');
        $this->addSql('ALTER TABLE user RENAME INDEX uniq_8d93d649f85e0677 TO UNIQ_2DA17977F85E0677');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reports (id INT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, firstname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, lastname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE Organization');
        $this->addSql('DROP TABLE TEPSITE');
        $this->addSql('ALTER TABLE User RENAME INDEX uniq_2da17977f85e0677 TO UNIQ_8D93D649F85E0677');
    }
}
