<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_ata extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ata_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'ata_date' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10'
                        ),
                        'ata_local' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'ata_participants' => array(
                                'type' => 'LONGTEXT',
                                'null' => TRUE
                        ),
                        'ata_deliberations' => array(
                                'type' => 'LONGTEXT',
                                'null' => TRUE
                        ),
                ));
                $this->dbforge->add_key('ata_id', TRUE);
                $this->dbforge->create_table('ata');
        }

        public function down()
        {
                $this->dbforge->drop_table('ata');
        }
}

?>
