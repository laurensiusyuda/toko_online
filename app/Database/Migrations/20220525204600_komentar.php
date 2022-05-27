<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
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
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'komentar' => [
                'type' => 'TEXT',
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
        //id user berelasai dengan table user id 
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('komentar');
    }

    public function down()
    //
    {
        // menghapus table user
        $this->forge->dropTable('komentar');
    }
}
