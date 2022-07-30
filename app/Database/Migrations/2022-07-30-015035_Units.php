<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Units extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'ID_UNIT' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true,
                'unsigned' => true
            ],
            'NAME_UNIT' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'DATE_MAKE' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'DATE_UPDATE' => [
                'type'    => 'TIMESTAMP',
                'null' => true
            ],
        ]);
        $this->forge->addKey('ID_UNIT', true);
        $this->forge->createTable('Units');
    }

    public function down()
    {
        //
        $this->forge->dropTable('Units');
    }
}
