<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produits extends Migration
{
    public function up()
    {
        $this->forge->addField([
                        'id'          => [
                            'type'           => 'INT',
                            'constraint'     => 5,
                            'unsigned'       => true,
                            'auto_increment' => true,
                        ],
                        'nom'         => [
                            'type'       => 'VARCHAR',
                            'constraint' => '100',
                        ],
                        'quantite'    => [
                            'type'       => 'INT',
                            'constraint' => 5,
                        ],
                        'prix'        => [
                            'type'       => 'DECIMAL',
                            'constraint' => '10,2',
                        ],
                        'created_at'  => [
                            'type' => 'DATETIME',
                            'null' => true,
                        ],
                        'updated_at'  => [
                            'type' => 'DATETIME',
                            'null' => true,
                        ],
                    ]);
                    $this->forge->addKey('id', true); // Set primary key
                    $this->forge->createTable('produits'); // Create the table
    }

    public function down()
    {
               $this->forge->dropTable('produits'); // Drop the table

    }
}



// <?php

// namespace App\Database\Migrations;

// use CodeIgniter\Database\Migration;

// class CreateYourTableName extends Migration
// {
//     public function up()
//     {
//         $this->forge->addField([
//             'id'          => [
//                 'type'           => 'INT',
//                 'constraint'     => 5,
//                 'unsigned'       => true,
//                 'auto_increment' => true,
//             ],
//             'nom'         => [
//                 'type'       => 'VARCHAR',
//                 'constraint' => '100',
//             ],
//             'quantite'    => [
//                 'type'       => 'INT',
//                 'constraint' => 5,
//             ],
//             'prix'        => [
//                 'type'       => 'DECIMAL',
//                 'constraint' => '10,2',
//             ],
//             'created_at'  => [
//                 'type' => 'DATETIME',
//                 'null' => true,
//             ],
//             'updated_at'  => [
//                 'type' => 'DATETIME',
//                 'null' => true,
//             ],
//         ]);
//         $this->forge->addKey('id', true); // Set primary key
//         $this->forge->createTable('your_table_name'); // Create the table
//     }

//     public function down()
//     {
//         $this->forge->dropTable('your_table_name'); // Drop the table
//     }
// }
