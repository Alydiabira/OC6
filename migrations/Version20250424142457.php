<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250424142457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout des champs description, available et created_at à la table post';
    }

    public function up(Schema $schema): void
    {
        // ✅ Ajout de created_at avec une valeur par défaut correcte
        $this->addSql("ALTER TABLE post 
            ADD description LONGTEXT DEFAULT NULL,
            ADD available TINYINT(1) NOT NULL DEFAULT 1,
            ADD created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE post DROP description, DROP available, DROP created_at');
    }
}