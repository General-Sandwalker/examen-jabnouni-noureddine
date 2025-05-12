<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Custom migration to add roles field to user and make email unique
 */
final class Version20250512141500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add roles field to user table and make email unique';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE "user" ADD roles JSON NOT NULL DEFAULT \'["ROLE_USER"]\'');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT unique_email UNIQUE (email)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT unique_email');
        $this->addSql('ALTER TABLE "user" DROP roles');
    }
}