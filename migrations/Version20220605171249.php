<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220605171249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_customer_service DROP FOREIGN KEY FK_73CC5A901095AD64');
        $this->addSql('DROP TABLE customer_service');
        $this->addSql('DROP TABLE product_customer_service');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customer_service (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product_customer_service (product_id INT NOT NULL, customer_service_id INT NOT NULL, INDEX IDX_73CC5A904584665A (product_id), INDEX IDX_73CC5A901095AD64 (customer_service_id), PRIMARY KEY(product_id, customer_service_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE product_customer_service ADD CONSTRAINT FK_73CC5A901095AD64 FOREIGN KEY (customer_service_id) REFERENCES customer_service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_customer_service ADD CONSTRAINT FK_73CC5A904584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }
}
