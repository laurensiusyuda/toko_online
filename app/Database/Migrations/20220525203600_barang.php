<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Barang extends Migration
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
            'nama' => [
                'type' => 'TEXT'
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'gambar' => [
                'type' => 'TEXT',
                'null' => true,
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
        $this->forge->addPrimaryKey('id',true);
        $this->forge->createTable('barang');
    }

    public function down()
    //
    {
        // menghapus table user
        $this->forge->dropTable('barang');
        
    }
}
