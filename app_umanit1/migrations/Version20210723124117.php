<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210723124117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE formulaire_progression_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE formulaire_progression (id INT NOT NULL, date_entretien TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_precedent_entretien TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, feeling_work INT NOT NULL, aimes_tu_poste INT NOT NULL, relations_equipe INT NOT NULL, relations_entreprise INT NOT NULL, commentaires_qvt VARCHAR(255) DEFAULT NULL, missions_principales VARCHAR(255) NOT NULL, reussite_poste VARCHAR(255) NOT NULL, aimes_tu_fonctions VARCHAR(255) NOT NULL, points_ameliorations VARCHAR(255) NOT NULL, competences_non_utilisees VARCHAR(255) NOT NULL, remarques_activites VARCHAR(255) NOT NULL, eval_travail VARCHAR(255) NOT NULL, vie_pro_perso VARCHAR(255) NOT NULL, synthese_collab VARCHAR(255) NOT NULL, synthese_manager VARCHAR(255) NOT NULL, signature_collab VARCHAR(255) NOT NULL, signature_manager VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE formulaire_progression_id_seq CASCADE');
        $this->addSql('DROP TABLE formulaire_progression');
    }
}
