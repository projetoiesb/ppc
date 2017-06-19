<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_initial_migration extends CI_Migration {

        public function up()
        {
                // Ata table
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
                                'type' => 'VARCHAR',
                                'null' => TRUE
                        ),
                        'ata_deliberations' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE
                        ),
                ));
                $this->dbforge->add_key('ata_id', TRUE);
                $this->dbforge->create_table('ata');

                // Disciplina table
                $this->dbforge->add_field(array(
                        'discip_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'discip_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'discip_description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'discip_code' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50'
                        ),
                        'discip_semester' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50'
                        ),
                        'discip_workload' => array(
                                'type' => 'INT',
                                'constraint' => 5
                        ),
                ));
                $this->dbforge->add_key('discip_id', TRUE);
                $this->dbforge->create_table('disciplina');


                // Professor table
                $this->dbforge->add_field(array(
                        'prof_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'prof_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'prof_cpf' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '11'
                        ),
                        'prof_greatTitle' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50'
                        ),
                        'prof_areaFormation' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50'
                        ),
                        'prof_linkLattes' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'prof_lastUpdate' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10'
                        ),
                ));
                $this->dbforge->add_key('prof_id', TRUE);
                $this->dbforge->create_table('professor');


                // Curso table
                $this->dbforge->add_field(array(
                        'curso_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'curso_type' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'curso_modality' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'curso_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'curso_license' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'curso_offerLocal' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'curso_turns' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'curso_vacancies' => array(
                                'type' => 'INT',
                                'constraint' => '11'
                        ),
                        'curso_workload' => array(
                                'type' => 'INT',
                                'constraint' => '5'
                        ),
                        'curso_regime' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'curso_periods' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),
                        'prof_id' => array(
                                'type' => 'INT',
                                'constraint' => '11'
                        ),
                ));
                $this->dbforge->add_key('curso_id', TRUE);
                $this->dbforge->add_key('prof_id');
                $this->dbforge->create_table('curso');


                // PPC table
                $this->dbforge->add_field(array(
                        'ppc_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'curso_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                        ),
                        'ppc_courseProfile' => array(
                                'type' => 'VARCHAR',
                        ),
                        'ppc_egressProfile' => array(
                                'type' => 'VARCHAR'
                        ),
                        'ppc_courseAccess' => array(
                                'type' => 'VARCHAR'
                        ),
                        'ppc_formation' => array(
                                'type' => 'VARCHAR'
                        ),
                        'ppc_teachingEvaluation' => array(
                                'type' => 'VARCHAR'
                        ),
                        'ppc_projectEvaluation' => array(
                                'type' => 'VARCHAR'
                        ),
                        'ppc_conclusion' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'ppc_trainee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'ppc_pad' => array(
                                'type' => 'VARCHAR'
                        ),
                ));
                $this->dbforge->add_key('ppc_id', TRUE);
                $this->dbforge->add_key('curso_id');
                $this->dbforge->create_table('ppc');


                // Matriz table
                $this->dbforge->add_field(array(
                        'curso_id' => array(
                                'type' => 'INT',
                                'constraint' => '11'
                        ),
                        'discip_id' => array(
                                'type' => 'INT',
                                'constraint' => '11'
                        ),
                ));
                $this->dbforge->add_key('curso_id', TRUE);
                $this->dbforge->add_key('discip_id', TRUE);
                $this->dbforge->create_table('curso_disciplina');
                $this->db->query('ALTER TABLE curso_disciplina ADD UNIQUE INDEX (curso_id, discip_id)');

                $this->load->model('ata_model');
                $this->ata_model->insert_dummy();

                $this->load->model('disciplina_model');
                $this->disciplina_model->insert_dummy();

                $this->load->model('professor_model');
                $this->professor_model->insert_dummy();

                $this->load->model('curso_model');
                $this->curso_model->insert_dummy();

                $this->load->model('ppc_model');
                $this->ppc_model->insert_dummy();

                $this->load->model('matriz_model');
                $this->matriz_model->insert_dummy();

        }

        public function down()
        {
                $this->dbforge->drop_table('ata');
                $this->dbforge->drop_table('disciplina');
                $this->dbforge->drop_table('professor');
                $this->dbforge->drop_table('curso');
                $this->dbforge->drop_table('ppc');
                $this->dbforge->drop_table('disciplina_curso');
        }
}

?>
