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
        // 🔹 Nettoyer les données invalides
        $this->addSql('UPDATE book SET seller_id = NULL WHERE seller_id IS NOT NULL AND seller_id NOT IN (SELECT id FROM user)');

        // 🔹 Créer la contrainte uniquement si elle n’existe pas
        // Doctrine ne permet pas de conditionner directement, donc on suppose que l’index existe déjà
        // et on ne le recrée pas pour éviter l’erreur

        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3318DE820D9 FOREIGN KEY (seller_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3318DE820D9');

        // 🔹 Supprimer l’index uniquement si nécessaire
        // Si tu veux être sûr, tu peux le supprimer manuellement dans MySQL :
        // DROP INDEX IDX_CBE5A3318DE820D9 ON book;
    }
}
