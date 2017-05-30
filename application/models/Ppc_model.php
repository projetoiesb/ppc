<?php

    class Ppc_model extends MY_Model {

    	public $table = 'ppc'; // you MUST mention the table name
    	public $primary_key = 'ppc_id'; // you MUST mention the primary key
    	//public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    	//public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update


        public function __construct() 
        {
                // Your own constructor code
                $this->load->database();
                
                $this->has_one['curso'] = 'Curso_model';

                // you can disable the use of timestamps. This way, MY_Model won't try to set a created_at and updated_at value on create methods. Also, if you pass it an array as calue, it tells MY_Model, that the first element is a created_at field type, the second element is a updated_at field type (and the third element is a deleted_at field type if $this->soft_deletes is set to TRUE)
		        $this->timestamps = FALSE;

        		// you can enable (TRUE) or disable (FALSE) the "soft delete" on records. Default is FALSE, which means that when you delete a row, that one is gone forever
            	$this->soft_deletes = FALSE;

                parent::__construct();
        }

        public function get_list()
        {
                $query = $this->db->get($this->table); //, 10);
                return $query->result_array();
        }


        public function get_item($id)
        {
                $query = $this->db->get_where($this->table, array($this->primary_key => $id));
                return $query->result_array();
        }

        public function insert($data = NULL) 
        {
            $this->load->helper('url');

            $data = array(
               'curso_id' => $this->input->post('curso'),
               'ppc_courseProfile' => $this->input->post('ppcCursoPerfil'),
               'ppc_egressProfile' => $this->input->post('ppcEgressoPerfil'),
               'ppc_courseAccess' => $this->input->post('ppcAcessoCurso'),
               'ppc_formation' => $this->input->post('ppcRepresentacao'),
               'ppc_teachingEvaluation' => $this->input->post('ppcAvalEnsino'),
               'ppc_projectEvaluation' => $this->input->post('ppcAvalCurso'),
               'ppc_conclusion' => $this->input->post('ppcTcc'),
               'ppc_trainee' => $this->input->post('ppcEstagio'),
               'ppc_pad' => $this->input->post('ppcPda'),
            );
            return $this->db->insert($this->table, $data);
        }


        public function edit($id = 0)
        {

            $this->load->helper('url');
 
            $data = array(
               'curso_id' => $this->input->post('curso'),
               'ppc_courseProfile' => $this->input->post('ppcCursoPerfil'),
               'ppc_egressProfile' => $this->input->post('ppcEgressoPerfil'),
               'ppc_courseAccess' => $this->input->post('ppcAcessoCurso'),
               'ppc_formation' => $this->input->post('ppcRepresentacao'),
               'ppc_teachingEvaluation' => $this->input->post('ppcAvalEnsino'),
               'ppc_projectEvaluation' => $this->input->post('ppcAvalCurso'),
               'ppc_conclusion' => $this->input->post('ppcTcc'),
               'ppc_trainee' => $this->input->post('ppcEstagio'),
               'ppc_pad' => $this->input->post('ppcPda'),
            );
        
            if ($id == 0) {
                //return $this->db->insert('news', $data);
                echo "<p>ID Inválido</p>";
            } else {
                $this->db->where($this->primary_key, $id);
                return $this->db->update($this->table, $data);
            }
        }

        public function delete($where = NULL)
        {
            $this->db->where($this->primary_key, $where);
            return $this->db->delete($this->table);
        }

        public function insert_dummy() 
        {

            $insert_data = array(
                array(
                    'ppc_id' => '1',
                    'curso_id' => '2',
                    'ppc_courseProfile' => 'Texto do perfil do curso.',
                    'ppc_egressProfile' => 'Texto do perfil do egresso.',
                    'ppc_courseAccess' => 'Texto forma de acesso ao curso.',
                    'ppc_formation' => 'Texto representação grafica perfil de formação.',
                    'ppc_teachingEvaluation' => 'Texto Sistema de avaliação.',
                    'ppc_projectEvaluation' => 'Texto Sistema de avalição do projeto do curso.',
                    'ppc_conclusion' => 'TCC',
                    'ppc_trainee' => 'Estágio',
                    'ppc_pad' => 'Texto politica de atendimento a pessoas com deficiência.',
                ),
                array(
                    'ppc_id' => '2',
                    'curso_id' => '1',
                    'ppc_courseProfile' => 'Texto do perfil do curso.',
                    'ppc_egressProfile' => 'Texto do perfil do egresso.',
                    'ppc_courseAccess' => 'Texto forma de acesso ao curso.',
                    'ppc_formation' => 'Texto representação grafica perfil de formação.',
                    'ppc_teachingEvaluation' => 'Texto Sistema de avaliação.',
                    'ppc_projectEvaluation' => 'Texto Sistema de avalição do projeto do curso.',
                    'ppc_conclusion' => 'TCC',
                    'ppc_trainee' => 'Estágio',
                    'ppc_pad' => 'Texto politica de atendimento a pessoas com deficiência.',
                ),

            );
            $this->db->insert_batch($this->table, $insert_data);
        }
}

?>
