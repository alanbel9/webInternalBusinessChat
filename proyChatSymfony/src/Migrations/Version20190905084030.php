<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190905084030 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX idx_usu_correo ON usuarios');
        $this->addSql('ALTER TABLE usuarios ADD fechamodificacion DATETIME DEFAULT \'NULL\', CHANGE Password Password VARCHAR(100) DEFAULT NULL, CHANGE foto_archivo foto_archivo LONGBLOB NOT NULL');
        $this->addSql('ALTER TABLE canales CHANGE Imagen Imagen LONGBLOB NOT NULL');
        $this->addSql('ALTER TABLE conversa CHANGE Id_Us Id_Us INT DEFAULT NULL, CHANGE Id_Canal Id_Canal INT DEFAULT NULL');
        $this->addSql('ALTER TABLE u_c DROP FOREIGN KEY ca-pk');
        $this->addSql('ALTER TABLE u_c DROP FOREIGN KEY us-pk');
        $this->addSql('ALTER TABLE u_c CHANGE Id_Us Id_Us INT DEFAULT NULL, CHANGE Id_Canal Id_Canal INT DEFAULT NULL');
        $this->addSql('ALTER TABLE u_c ADD CONSTRAINT FK_44E302D037B3F73B FOREIGN KEY (Id_Canal) REFERENCES canales (Id_Canal)');
        $this->addSql('ALTER TABLE u_c ADD CONSTRAINT FK_44E302D04EA54D6B FOREIGN KEY (Id_Us) REFERENCES usuarios (Id_Us)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE canales CHANGE Imagen Imagen BLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE conversa CHANGE Id_Us Id_Us INT DEFAULT NULL, CHANGE Id_Canal Id_Canal INT DEFAULT NULL');
        $this->addSql('ALTER TABLE u_c DROP FOREIGN KEY FK_44E302D037B3F73B');
        $this->addSql('ALTER TABLE u_c DROP FOREIGN KEY FK_44E302D04EA54D6B');
        $this->addSql('ALTER TABLE u_c CHANGE Id_Canal Id_Canal INT DEFAULT NULL, CHANGE Id_Us Id_Us INT DEFAULT NULL');
        $this->addSql('ALTER TABLE u_c ADD CONSTRAINT ca-pk FOREIGN KEY (Id_Canal) REFERENCES canales (Id_Canal) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE u_c ADD CONSTRAINT us-pk FOREIGN KEY (Id_Us) REFERENCES usuarios (Id_Us) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usuarios DROP fechamodificacion, CHANGE Password Password VARCHAR(100) NOT NULL COLLATE utf8_general_ci, CHANGE foto_archivo foto_archivo BLOB DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX idx_usu_correo ON usuarios (Correo)');
    }
}
