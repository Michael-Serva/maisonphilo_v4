<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220820080627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE survey ADD specialists LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD hospitals LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD aids LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD digit LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD politics LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE survey DROP specialists, DROP hospitals, DROP aids, DROP digit, DROP politics');
    }
}
