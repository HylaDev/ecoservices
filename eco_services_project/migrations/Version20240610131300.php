<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240610131300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE command ADD cmduser_id INT NOT NULL');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD41AD5135C FOREIGN KEY (cmduser_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_8ECAEAD41AD5135C ON command (cmduser_id)');
        $this->addSql('ALTER TABLE quote_request ADD qruser_id INT NOT NULL');
        $this->addSql('ALTER TABLE quote_request ADD CONSTRAINT FK_D478271BD5A6593E FOREIGN KEY (qruser_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D478271BD5A6593E ON quote_request (qruser_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE command DROP CONSTRAINT FK_8ECAEAD41AD5135C');
        $this->addSql('DROP INDEX IDX_8ECAEAD41AD5135C');
        $this->addSql('ALTER TABLE command DROP cmduser_id');
        $this->addSql('ALTER TABLE quote_request DROP CONSTRAINT FK_D478271BD5A6593E');
        $this->addSql('DROP INDEX IDX_D478271BD5A6593E');
        $this->addSql('ALTER TABLE quote_request DROP qruser_id');
    }
}
