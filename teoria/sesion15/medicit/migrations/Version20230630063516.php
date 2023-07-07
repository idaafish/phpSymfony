<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630063516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cita ADD medico_id INT DEFAULT NULL, ADD paciente_id INT NOT NULL');
        $this->addSql('ALTER TABLE cita ADD CONSTRAINT FK_3E379A62A7FB1C0C FOREIGN KEY (medico_id) REFERENCES medico (id)');
        $this->addSql('ALTER TABLE cita ADD CONSTRAINT FK_3E379A627310DAD4 FOREIGN KEY (paciente_id) REFERENCES paciente (id)');
        $this->addSql('CREATE INDEX IDX_3E379A62A7FB1C0C ON cita (medico_id)');
        $this->addSql('CREATE INDEX IDX_3E379A627310DAD4 ON cita (paciente_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cita DROP FOREIGN KEY FK_3E379A62A7FB1C0C');
        $this->addSql('ALTER TABLE cita DROP FOREIGN KEY FK_3E379A627310DAD4');
        $this->addSql('DROP INDEX IDX_3E379A62A7FB1C0C ON cita');
        $this->addSql('DROP INDEX IDX_3E379A627310DAD4 ON cita');
        $this->addSql('ALTER TABLE cita DROP medico_id, DROP paciente_id');
    }
}
