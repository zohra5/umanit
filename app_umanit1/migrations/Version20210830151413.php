<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210830151413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formations_souhaitees ALTER par_le_salarie DROP NOT NULL');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER objectifs_aatteindre DROP NOT NULL');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER par_le_manager DROP NOT NULL');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER objectifs_aatteindre_manager DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER par_le_salarie SET NOT NULL');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER objectifs_aatteindre SET NOT NULL');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER par_le_manager SET NOT NULL');
        $this->addSql('ALTER TABLE formations_souhaitees ALTER objectifs_aatteindre_manager SET NOT NULL');
    }
}
