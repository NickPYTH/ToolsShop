<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tool extends Migration
{
	public function up()
	{
        if (!$this->db->tableexists('Tools'))
        {
            // Setup Keys
            $this->forge->addkey('id', TRUE);

            $this->forge->addfield(array(
                'id' => array('type' => 'INT', 'unsigned' => TRUE, 'null' => FALSE, 'auto_increment' => TRUE),
                'Name' => array('type' => 'VARCHAR', 'constraint' => '200', 'null' => FALSE),
				'Description' => array('type' => 'VARCHAR', 'constraint' => '200', 'null' => FALSE),
                'Price' => array('type' => 'INT', 'unsigned' => TRUE, 'null' => FALSE),
            ));

            $this->forge->createtable('Tools', TRUE);
        }
	}

	public function down()
	{
		$this->forge->droptable('Tools');
	}
}
