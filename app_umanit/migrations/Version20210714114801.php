<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210714114801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD firstname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD mail VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD birthday DATE NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD service VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD job_title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD date_hire DATE NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD accession_date DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" DROP name');
        $this->addSql('ALTER TABLE "user" DROP firstname');
        $this->addSql('ALTER TABLE "user" DROP mail');
        $this->addSql('ALTER TABLE "user" DROP birthday');
        $this->addSql('ALTER TABLE "user" DROP service');
        $this->addSql('ALTER TABLE "user" DROP job_title');
        $this->addSql('ALTER TABLE "user" DROP date_hire');
        $this->addSql('ALTER TABLE "user" DROP accession_date');
    }
}
