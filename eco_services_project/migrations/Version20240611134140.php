<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240611134140 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE command_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE command_detail_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE customer_role_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE product_category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quote_request_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quote_request_detail_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE command (id INT NOT NULL, cmduser_id INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, validity BOOLEAN NOT NULL, payment_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8ECAEAD41AD5135C ON command (cmduser_id)');
        $this->addSql('CREATE TABLE command_detail (id INT NOT NULL, product_id INT NOT NULL, command_id INT NOT NULL, total DOUBLE PRECISION NOT NULL, quantity INT NOT NULL, price INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9145B6D04584665A ON command_detail (product_id)');
        $this->addSql('CREATE INDEX IDX_9145B6D033E1689A ON command_detail (command_id)');
        $this->addSql('CREATE TABLE customer_role (id INT NOT NULL, name VARCHAR(150) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product (id INT NOT NULL, category_id INT NOT NULL, designation VARCHAR(100) NOT NULL, price INT NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D34A04AD12469DE2 ON product (category_id)');
        $this->addSql('CREATE TABLE product_category (id INT NOT NULL, designation VARCHAR(100) NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE quote_request (id INT NOT NULL, qruser_id INT NOT NULL, date DATE NOT NULL, validity BOOLEAN NOT NULL, total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D478271BD5A6593E ON quote_request (qruser_id)');
        $this->addSql('CREATE TABLE quote_request_detail (id INT NOT NULL, product_id INT NOT NULL, request_id INT NOT NULL, quantity DOUBLE PRECISION NOT NULL, price DOUBLE PRECISION NOT NULL, total DOUBLE PRECISION NOT NULL, discount DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C8D1E06A4584665A ON quote_request_detail (product_id)');
        $this->addSql('CREATE INDEX IDX_C8D1E06A427EB8A5 ON quote_request_detail (request_id)');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, customer_role_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, lastname VARCHAR(200) NOT NULL, firstname VARCHAR(200) NOT NULL, phone VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1483A5E9CADE8612 ON users (customer_role_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON users (email)');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD41AD5135C FOREIGN KEY (cmduser_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE command_detail ADD CONSTRAINT FK_9145B6D04584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE command_detail ADD CONSTRAINT FK_9145B6D033E1689A FOREIGN KEY (command_id) REFERENCES command (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES product_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quote_request ADD CONSTRAINT FK_D478271BD5A6593E FOREIGN KEY (qruser_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quote_request_detail ADD CONSTRAINT FK_C8D1E06A4584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quote_request_detail ADD CONSTRAINT FK_C8D1E06A427EB8A5 FOREIGN KEY (request_id) REFERENCES quote_request (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9CADE8612 FOREIGN KEY (customer_role_id) REFERENCES customer_role (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE command_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE command_detail_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE customer_role_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE product_category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quote_request_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quote_request_detail_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('ALTER TABLE command DROP CONSTRAINT FK_8ECAEAD41AD5135C');
        $this->addSql('ALTER TABLE command_detail DROP CONSTRAINT FK_9145B6D04584665A');
        $this->addSql('ALTER TABLE command_detail DROP CONSTRAINT FK_9145B6D033E1689A');
        $this->addSql('ALTER TABLE product DROP CONSTRAINT FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE quote_request DROP CONSTRAINT FK_D478271BD5A6593E');
        $this->addSql('ALTER TABLE quote_request_detail DROP CONSTRAINT FK_C8D1E06A4584665A');
        $this->addSql('ALTER TABLE quote_request_detail DROP CONSTRAINT FK_C8D1E06A427EB8A5');
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E9CADE8612');
        $this->addSql('DROP TABLE command');
        $this->addSql('DROP TABLE command_detail');
        $this->addSql('DROP TABLE customer_role');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_category');
        $this->addSql('DROP TABLE quote_request');
        $this->addSql('DROP TABLE quote_request_detail');
        $this->addSql('DROP TABLE users');
    }
}
