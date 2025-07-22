<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250722140428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute l’index et la contrainte FOREIGN KEY sur seller_id dans book, après nettoyage des données invalides.';
    }

    public function up(Schema $schema): void
    {
        // 🔹 Nettoyer les données invalides avant d’ajouter la contrainte
        $this->addSql('UPDATE book SET seller_id = NULL WHERE seller_id IS NOT NULL AND seller_id NOT IN (SELECT id FROM user)');

        // 🔹 Créer l’index sur seller_id
        $this->addSql('CREATE INDEX IDX_CBE5A3318DE820D9 ON book (seller_id)');

        // 🔹 Ajouter la contrainte FOREIGN KEY
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3318DE820D9 FOREIGN KEY (seller_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // 🔹 Supprimer la contrainte et l’index
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3318DE820D9');
        $this->addSql('DROP INDEX IDX_CBE5A3318DE820D9 ON book');
    }
}
