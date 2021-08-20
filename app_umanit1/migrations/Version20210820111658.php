<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210820111658 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE activites_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE bilan_competences_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE evaluation_objectifs_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE formations_souhaitees_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE formations_suivie_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE formulaire_progression_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE objectif_definition_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE activites (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, realisations VARCHAR(255) NOT NULL, reussites VARCHAR(255) NOT NULL, difficultes VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_766B5EB544BAAE59 ON activites (formulaire_progression_id)');
        $this->addSql('CREATE TABLE bilan_competences (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, competences_bilan VARCHAR(255) NOT NULL, evaluation_bilan INT NOT NULL, commentaire_bilan VARCHAR(255) NOT NULL, actions_bilan VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9648E2C444BAAE59 ON bilan_competences (formulaire_progression_id)');
        $this->addSql('CREATE TABLE evaluation_objectifs (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, objectifs_eval VARCHAR(255) NOT NULL, realisation_lvl_eval VARCHAR(255) NOT NULL, moyens_eval VARCHAR(255) NOT NULL, comment_collab_eval VARCHAR(255) NOT NULL, comment_manager_eval VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D5809D8544BAAE59 ON evaluation_objectifs (formulaire_progression_id)');
        $this->addSql('CREATE TABLE formations_souhaitees (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, par_le_salarie VARCHAR(255) NOT NULL, objectifs_aatteindre VARCHAR(255) NOT NULL, par_le_manager VARCHAR(255) NOT NULL, objectifs_aatteindre_manager VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2C078B9344BAAE59 ON formations_souhaitees (formulaire_progression_id)');
        $this->addSql('CREATE TABLE formations_suivie (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, intitule VARCHAR(255) NOT NULL, duree VARCHAR(255) NOT NULL, objectifs_formation VARCHAR(255) NOT NULL, attente_formation VARCHAR(255) NOT NULL, mis_en_pratique VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_80E68DC044BAAE59 ON formations_suivie (formulaire_progression_id)');
        $this->addSql('CREATE TABLE formulaire_progression (id INT NOT NULL, date_entretien TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_precedent_entretien TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ressenti_travail INT DEFAULT NULL, aimes_tu_poste INT DEFAULT NULL, relations_equipe INT DEFAULT NULL, relations_entreprise INT DEFAULT NULL, commentaires_qvt VARCHAR(255) DEFAULT NULL, missions_principales VARCHAR(255) DEFAULT NULL, reussite_poste VARCHAR(255) DEFAULT NULL, aimes_tu_fonctions VARCHAR(255) DEFAULT NULL, points_ameliorations VARCHAR(255) DEFAULT NULL, competences_non_utilisees VARCHAR(255) DEFAULT NULL, remarques_activites VARCHAR(255) DEFAULT NULL, eval_travail VARCHAR(255) DEFAULT NULL, vie_pro_perso VARCHAR(255) DEFAULT NULL, synthese_collab VARCHAR(255) DEFAULT NULL, synthese_manager VARCHAR(255) DEFAULT NULL, signature_collab VARCHAR(255) DEFAULT NULL, signature_manager VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE objectif_definition (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, objectifs VARCHAR(255) NOT NULL, indicateur_de_realisation VARCHAR(255) NOT NULL, moyens_amettre_en_oeuvre VARCHAR(255) NOT NULL, delais_de_realisation VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9CA0DA5E44BAAE59 ON objectif_definition (formulaire_progression_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, birthday DATE NOT NULL, service VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, date_hire DATE NOT NULL, accession_date DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('ALTER TABLE activites ADD CONSTRAINT FK_766B5EB544BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE bilan_competences ADD CONSTRAINT FK_9648E2C444BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE evaluation_objectifs ADD CONSTRAINT FK_D5809D8544BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formations_souhaitees ADD CONSTRAINT FK_2C078B9344BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formations_suivie ADD CONSTRAINT FK_80E68DC044BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE objectif_definition ADD CONSTRAINT FK_9CA0DA5E44BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE activites DROP CONSTRAINT FK_766B5EB544BAAE59');
        $this->addSql('ALTER TABLE bilan_competences DROP CONSTRAINT FK_9648E2C444BAAE59');
        $this->addSql('ALTER TABLE evaluation_objectifs DROP CONSTRAINT FK_D5809D8544BAAE59');
        $this->addSql('ALTER TABLE formations_souhaitees DROP CONSTRAINT FK_2C078B9344BAAE59');
        $this->addSql('ALTER TABLE formations_suivie DROP CONSTRAINT FK_80E68DC044BAAE59');
        $this->addSql('ALTER TABLE objectif_definition DROP CONSTRAINT FK_9CA0DA5E44BAAE59');
        $this->addSql('DROP SEQUENCE activites_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE bilan_competences_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE evaluation_objectifs_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE formations_souhaitees_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE formations_suivie_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE formulaire_progression_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE objectif_definition_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE bilan_competences');
        $this->addSql('DROP TABLE evaluation_objectifs');
        $this->addSql('DROP TABLE formations_souhaitees');
        $this->addSql('DROP TABLE formations_suivie');
        $this->addSql('DROP TABLE formulaire_progression');
        $this->addSql('DROP TABLE objectif_definition');
        $this->addSql('DROP TABLE "user"');
    }
}
