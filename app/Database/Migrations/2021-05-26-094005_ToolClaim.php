<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BookClaim extends Migration
{
	public function up()
	{
		if (!$this->db->tableexists('ToolClaim'))
        {
            // Setup Keys
            $this->forge->addkey('id', TRUE);

            $this->forge->addfield(array(
                'id' => array('type' => 'INT', 'unsigned' => TRUE, 'null' => FALSE, 'auto_increment' => TRUE),
				'id_order' => array('type' => 'INT', 'unsigned' => TRUE, 'null' => FALSE),
				'id_client' => array('type' => 'INT', 'unsigned' => TRUE, 'null' => FALSE),
				'duration' => array('type' => 'INT', 'null' => FALSE),
            ));
            $this->forge->addForeignKey('id_order','Order','id','RESTRICT','RESRICT');
			$this->forge->addForeignKey('id_client','Reader','id','RESTRICT','RESRICT');
            $this->forge->createtable('ToolClaim', TRUE);
        }
	}

	public function down()
	{
		$this->forge->droptable('ToolClaim');
	}
}
