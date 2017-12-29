<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171228080842 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE laptop (id SERIAL NOT NULL, product_id INT DEFAULT NULL, code INT NOT NULL, speed INT NOT NULL, ram INT NOT NULL, hd NUMERIC(5, 1) NOT NULL, price DOUBLE PRECISION NOT NULL, screen INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_E001563B4584665A ON laptop (product_id)');
        $this->addSql('CREATE TABLE computer (id SERIAL NOT NULL, product_id INT DEFAULT NULL, speed INT NOT NULL, ram INT NOT NULL, hd NUMERIC(5, 1) NOT NULL, cd VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A298A7A64584665A ON computer (product_id)');
        $this->addSql('CREATE TABLE printer (id SERIAL NOT NULL, product_id INT DEFAULT NULL, color VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8D4C79ED4584665A ON printer (product_id)');
        $this->addSql('CREATE TABLE product (id SERIAL NOT NULL, maker VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE laptop ADD CONSTRAINT FK_E001563B4584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE computer ADD CONSTRAINT FK_A298A7A64584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE printer ADD CONSTRAINT FK_8D4C79ED4584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE laptop DROP CONSTRAINT FK_E001563B4584665A');
        $this->addSql('ALTER TABLE computer DROP CONSTRAINT FK_A298A7A64584665A');
        $this->addSql('ALTER TABLE printer DROP CONSTRAINT FK_8D4C79ED4584665A');
        $this->addSql('DROP TABLE laptop');
        $this->addSql('DROP TABLE computer');
        $this->addSql('DROP TABLE printer');
        $this->addSql('DROP TABLE product');
    }
}
