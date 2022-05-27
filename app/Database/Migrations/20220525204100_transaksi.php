<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    // untuk menjalankan pada saat migration  
    {
        //membuat field
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_pembeli' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'total_harga' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'update_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'update_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        // mendeskripsikan primary key 
        $this->forge->addPrimaryKey('id', true);
        // menghubungkan dua buah table 
        $this->forge->addForeignKey('id_pembeli','user','id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    //
    {
        // menghapus table user
        $this->forge->dropTable('transaksi');
    }
}
