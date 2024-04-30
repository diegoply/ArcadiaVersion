<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240430080337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal ADD image_animal_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F5614F742 FOREIGN KEY (image_animal_id) REFERENCES image_animal (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6AAB231F5614F742 ON animal (image_animal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F5614F742');
        $this->addSql('DROP INDEX UNIQ_6AAB231F5614F742 ON animal');
        $this->addSql('ALTER TABLE animal DROP image_animal_id');
    }
}
