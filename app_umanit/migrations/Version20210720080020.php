<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720080020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE competence_result_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE form_progress_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE objective_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE competence_result (id INT NOT NULL, form_progress_id INT DEFAULT NULL, competence VARCHAR(255) NOT NULL, evaluation INT NOT NULL, commentaire VARCHAR(255) NOT NULL, action_a_mener VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5A89A40FB4B017D8 ON competence_result (form_progress_id)');
        $this->addSql('CREATE TABLE form_progress (id INT NOT NULL, date_interview TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE objective (id INT NOT NULL, form_progress_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, comment VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B996F101B4B017D8 ON objective (form_progress_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, birthday DATE NOT NULL, service VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, date_hire DATE NOT NULL, accession_date DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('ALTER TABLE competence_result ADD CONSTRAINT FK_5A89A40FB4B017D8 FOREIGN KEY (form_progress_id) REFERENCES form_progress (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE objective ADD CONSTRAINT FK_B996F101B4B017D8 FOREIGN KEY (form_progress_id) REFERENCES form_progress (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE competence_result DROP CONSTRAINT FK_5A89A40FB4B017D8');
        $this->addSql('ALTER TABLE objective DROP CONSTRAINT FK_B996F101B4B017D8');
        $this->addSql('DROP SEQUENCE competence_result_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE form_progress_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE objective_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE competence_result');
        $this->addSql('DROP TABLE form_progress');
        $this->addSql('DROP TABLE objective');
        $this->addSql('DROP TABLE "user"');
    }
}