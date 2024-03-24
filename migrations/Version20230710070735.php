<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230710070735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE ingredients ingredients VARCHAR(255) DEFAULT NULL, CHANGE preparation preparation VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE lng lng VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe CHANGE title title VARCHAR(255) NOT NULL, CHANGE ingredients ingredients VARCHAR(255) NOT NULL, CHANGE preparation preparation VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL, CHANGE lng lng VARCHAR(255) NOT NULL');
    }
}
