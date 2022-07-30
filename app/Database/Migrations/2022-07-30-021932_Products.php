<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Products extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'CODE_BARCODE'   => [
                'type'       => 'char',
                'constraint' => '50',
            ],
            'NAME_PRODUCT'   => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ID_UNIT'        => [
                'type'       => 'int',
                'constraint' => '11'
            ],
            'ID_CATEGORY'    => [
                'type'       => 'int',
                'constraint' => '11'
            ],
            'STOK'           => [
                'type'       => 'double',
                'constraint' => '11,2',
                'default'    => 0.00
            ],
            'PRICE_BUY'      => [
                'type'       => 'double',
                'constraint' => '11,2',
                'default'    => 0.00
            ],
            'PRICE_SELL'     => [
                'type'       => 'double',
                'constraint' => '11,2',
                'default'    => 0.00
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
        $this->forge->addKey('CODE_BARCODE', true);
        $this->forge->addForeignKey('ID_UNIT', 'units', 'ID_UNIT', 'CASCADE');
        $this->forge->addForeignKey('ID_CATEGORY', 'categories', 'ID_CATEGORY', 'CASCADE');
        $this->forge->createTable('Products');
    }

    public function down()
    {
        //
        $this->forge->dropTable('Products');
    }
}
