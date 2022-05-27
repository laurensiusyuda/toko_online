<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'TEXT',
                'constraint' => 100,
            ],
            'salt' => [
                'type' => 'TEXT',
                'constraint' => 100,
            ],
            'avatar' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'role' => [
                // membuat role admin dan user 
                // dimana jika 1 = user dan 0 = admin
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1,
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
        $this->forge->createTable('user');
    }

    public function down()
    //
    {
        // menghapus table user
        $this->forge->dropTable('user');
        
    }
}


?>