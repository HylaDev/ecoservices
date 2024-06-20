<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240620171508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE qr_status_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE qr_status (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE product ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quote_request ADD status_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE quote_request ADD comment TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE quote_request DROP validity');
        $this->addSql('ALTER TABLE quote_request ADD CONSTRAINT FK_D478271B6BF700BD FOREIGN KEY (status_id) REFERENCES qr_status (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D478271B6BF700BD ON quote_request (status_id)');
        $this->addSql('ALTER TABLE quote_request_detail DROP CONSTRAINT fk_c8d1e06a4584665a');
        $this->addSql('DROP INDEX idx_c8d1e06a4584665a');
        $this->addSql('ALTER TABLE quote_request_detail ADD estimated_weight INT NOT NULL');
        $this->addSql('ALTER TABLE quote_request_detail DROP quantity');
        $this->addSql('ALTER TABLE quote_request_detail DROP price');
        $this->addSql('ALTER TABLE quote_request_detail DROP total');
        $this->addSql('ALTER TABLE quote_request_detail DROP discount');
        $this->addSql('ALTER TABLE quote_request_detail RENAME COLUMN product_id TO service_id');
        $this->addSql('ALTER TABLE quote_request_detail ADD CONSTRAINT FK_C8D1E06AED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_C8D1E06AED5CA9E6 ON quote_request_detail (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE quote_request DROP CONSTRAINT FK_D478271B6BF700BD');
        $this->addSql('DROP SEQUENCE qr_status_id_seq CASCADE');
        $this->addSql('DROP TABLE qr_status');
        $this->addSql('DROP INDEX IDX_D478271B6BF700BD');
        $this->addSql('ALTER TABLE quote_request ADD validity BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE quote_request DROP status_id');
        $this->addSql('ALTER TABLE quote_request DROP comment');
        $this->addSql('ALTER TABLE product DROP image');
        $this->addSql('ALTER TABLE quote_request_detail DROP CONSTRAINT FK_C8D1E06AED5CA9E6');
        $this->addSql('DROP INDEX IDX_C8D1E06AED5CA9E6');
        $this->addSql('ALTER TABLE quote_request_detail ADD product_id INT NOT NULL');
        $this->addSql('ALTER TABLE quote_request_detail ADD quantity DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE quote_request_detail ADD price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE quote_request_detail ADD total DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE quote_request_detail ADD discount DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE quote_request_detail DROP service_id');
        $this->addSql('ALTER TABLE quote_request_detail DROP estimated_weight');
        $this->addSql('ALTER TABLE quote_request_detail ADD CONSTRAINT fk_c8d1e06a4584665a FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_c8d1e06a4584665a ON quote_request_detail (product_id)');
    }
}
