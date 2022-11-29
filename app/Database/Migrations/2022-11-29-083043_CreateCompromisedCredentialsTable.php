<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCompromisedCredentialsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'user_agent' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('compromiseds');
    }

    public function down()
    {
        $this->forge->dropTable('compromiseds');
    }
}
