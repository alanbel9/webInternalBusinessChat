<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190825071702 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE conversa (Id INT AUTO_INCREMENT NOT NULL, Mensaje LONGTEXT DEFAULT NULL, Fecha DATETIME DEFAULT \'NULL\', Id_Us INT DEFAULT NULL, Id_Canal INT DEFAULT NULL, INDEX Id_Us (Id_Us), INDEX Id_Canal (Id_Canal), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE u_c (Id_UC INT AUTO_INCREMENT NOT NULL, Id_Canal INT DEFAULT NULL, Id_Us INT DEFAULT NULL, INDEX ca (Id_Canal), INDEX us (Id_Us), UNIQUE INDEX `unique` (Id_Us, Id_Canal), PRIMARY KEY(Id_UC)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (Id_Us INT AUTO_INCREMENT NOT NULL, Correo VARCHAR(100) NOT NULL, Password VARCHAR(100) NOT NULL, Nombre VARCHAR(100) DEFAULT \'NULL\', Apellidos VARCHAR(100) DEFAULT \'NULL\', Puesto VARCHAR(100) DEFAULT \'NULL\', Conocimientos LONGTEXT DEFAULT NULL, Aficiones LONGTEXT DEFAULT NULL, Foto VARCHAR(100) DEFAULT \'NULL\', Fecha_Nac DATE DEFAULT \'NULL\', Fecha_Ult_Con DATETIME DEFAULT \'NULL\', PRIMARY KEY(Id_Us)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conversa ADD CONSTRAINT FK_67FEFF8C4EA54D6B FOREIGN KEY (Id_Us) REFERENCES usuarios (Id_Us)');
        $this->addSql('ALTER TABLE conversa ADD CONSTRAINT FK_67FEFF8C37B3F73B FOREIGN KEY (Id_Canal) REFERENCES canales (Id_Canal)');
        $this->addSql('ALTER TABLE u_c ADD CONSTRAINT FK_44E302D037B3F73B FOREIGN KEY (Id_Canal) REFERENCES canales (Id_Canal)');
        $this->addSql('ALTER TABLE u_c ADD CONSTRAINT FK_44E302D04EA54D6B FOREIGN KEY (Id_Us) REFERENCES usuarios (Id_Us)');
        $this->addSql('ALTER TABLE canales CHANGE Nombre Nombre VARCHAR(100) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE conversa DROP FOREIGN KEY FK_67FEFF8C4EA54D6B');
        $this->addSql('ALTER TABLE u_c DROP FOREIGN KEY FK_44E302D04EA54D6B');
        $this->addSql('DROP TABLE conversa');
        $this->addSql('DROP TABLE u_c');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('ALTER TABLE canales CHANGE Nombre Nombre VARCHAR(100) DEFAULT \'\'NULL\'\' COLLATE utf8mb4_unicode_ci');
    }
}
