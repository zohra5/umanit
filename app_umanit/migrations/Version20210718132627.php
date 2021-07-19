<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210718132627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE form_progress_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE objective_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE form_progress (id INT NOT NULL, date_interview TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE objective (id INT NOT NULL, form_progress_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B996F101B4B017D8 ON objective (form_progress_id)');
        $this->addSql('ALTER TABLE objective ADD CONSTRAINT FK_B996F101B4B017D8 FOREIGN KEY (form_progress_id) REFERENCES form_progress (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE objective DROP CONSTRAINT FK_B996F101B4B017D8');
        $this->addSql('DROP SEQUENCE form_progress_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE objective_id_seq CASCADE');
        $this->addSql('DROP TABLE form_progress');
        $this->addSql('DROP TABLE objective');
    }
}
