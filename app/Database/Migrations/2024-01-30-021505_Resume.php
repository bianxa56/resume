<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resume extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'movie_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'movie_synopsis' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'movie_genre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'movie_image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('movie');
    }

    public function down()
    {
        $this->forge->dropTable('movie');
    }
}
