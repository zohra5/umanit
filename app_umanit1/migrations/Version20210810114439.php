<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210810114439 extends AbstractMigration
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
        $this->addSql('CREATE SEQUENCE objectif_definition_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
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
        $this->addSql('CREATE TABLE objectif_definition (id INT NOT NULL, formulaire_progression_id INT DEFAULT NULL, objectifs VARCHAR(255) NOT NULL, indicateur_de_realisation VARCHAR(255) NOT NULL, moyens_amettre_en_oeuvre VARCHAR(255) NOT NULL, delais_de_realisation VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9CA0DA5E44BAAE59 ON objectif_definition (formulaire_progression_id)');
        $this->addSql('ALTER TABLE activites ADD CONSTRAINT FK_766B5EB544BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE bilan_competences ADD CONSTRAINT FK_9648E2C444BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE evaluation_objectifs ADD CONSTRAINT FK_D5809D8544BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formations_souhaitees ADD CONSTRAINT FK_2C078B9344BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formations_suivie ADD CONSTRAINT FK_80E68DC044BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE objectif_definition ADD CONSTRAINT FK_9CA0DA5E44BAAE59 FOREIGN KEY (formulaire_progression_id) REFERENCES formulaire_progression (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formulaire_progression ADD ressenti_travail INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formulaire_progression DROP feeling_work');
        $this->addSql('ALTER TABLE formulaire_progression ALTER aimes_tu_poste DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER relations_equipe DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER relations_entreprise DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER missions_principales DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER reussite_poste DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER aimes_tu_fonctions DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER points_ameliorations DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER competences_non_utilisees DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER remarques_activites DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER eval_travail DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER vie_pro_perso DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER synthese_collab DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER synthese_manager DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER signature_collab DROP NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER signature_manager DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE activites_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE bilan_competences_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE evaluation_objectifs_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE formations_souhaitees_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE formations_suivie_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE objectif_definition_id_seq CASCADE');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE bilan_competences');
        $this->addSql('DROP TABLE evaluation_objectifs');
        $this->addSql('DROP TABLE formations_souhaitees');
        $this->addSql('DROP TABLE formations_suivie');
        $this->addSql('DROP TABLE objectif_definition');
        $this->addSql('ALTER TABLE formulaire_progression ADD feeling_work INT NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression DROP ressenti_travail');
        $this->addSql('ALTER TABLE formulaire_progression ALTER aimes_tu_poste SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER relations_equipe SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER relations_entreprise SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER missions_principales SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER reussite_poste SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER aimes_tu_fonctions SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER points_ameliorations SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER competences_non_utilisees SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER remarques_activites SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER eval_travail SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER vie_pro_perso SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER synthese_collab SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER synthese_manager SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER signature_collab SET NOT NULL');
        $this->addSql('ALTER TABLE formulaire_progression ALTER signature_manager SET NOT NULL');
    }
}
