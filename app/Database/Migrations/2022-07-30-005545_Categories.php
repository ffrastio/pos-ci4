<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Categories extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'ID_CATEGORY' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true,
                'unsigned' => true
            ],
            'NAME_CATEGORY' => [
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
        $this->forge->addKey('ID_CATEGORY', true);
        $this->forge->createTable('Categories');
    }

    public function down()
    {
        //
        $this->forge->dropTable('Categories');
    }
}
