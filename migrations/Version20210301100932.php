<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210301100932 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, users_id INTEGER DEFAULT NULL, posts_id INTEGER DEFAULT NULL, author VARCHAR(255) DEFAULT NULL, content VARCHAR(500) DEFAULT NULL, created_at DATETIME DEFAULT NULL, is_deleted BOOLEAN NOT NULL)');
        $this->addSql('CREATE INDEX IDX_9474526C67B3B43D ON comment (users_id)');
        $this->addSql('CREATE INDEX IDX_9474526CD5E258C5 ON comment (posts_id)');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, users_id INTEGER DEFAULT NULL, content VARCHAR(500) DEFAULT NULL, author VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, is_published BOOLEAN NOT NULL, is_deleted BOOLEAN NOT NULL)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D67B3B43D ON post (users_id)');
        $this->addSql('CREATE TABLE "user" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, is_active BOOLEAN NOT NULL, is_blocked BOOLEAN NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE "user"');
    }
}
