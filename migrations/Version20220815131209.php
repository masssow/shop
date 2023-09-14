<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220815131209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel ADD title VARCHAR(255) DEFAULT NULL, ADD subtitle VARCHAR(255) DEFAULT NULL, ADD buttom VARCHAR(255) DEFAULT NULL, DROP slide1, DROP slide2, DROP slide3, DROP slide4, DROP slide5, DROP slide6');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel ADD slide1 VARCHAR(255) DEFAULT NULL, ADD slide2 VARCHAR(255) DEFAULT NULL, ADD slide3 VARCHAR(255) DEFAULT NULL, ADD slide4 VARCHAR(255) DEFAULT NULL, ADD slide5 VARCHAR(255) DEFAULT NULL, ADD slide6 VARCHAR(255) DEFAULT NULL, DROP title, DROP subtitle, DROP buttom');
    }
}
