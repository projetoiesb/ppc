<?php

    class Atividade_model extends MY_Model {

    	public $table = 'atividades'; // you MUST mention the table name
    	public $primary_key = 'ativ_id'; // you MUST mention the primary key
    	//public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    	//public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update

        public $date;
        public $local;
        public $participants;
        public $deliberations;

        public function __construct()
        {
                // Your own constructor code
                $this->load->database();

                //$this->has_many['cursos'] = 'Curso_model';

                // you can disable the use of timestamps. This way, MY_Model won't try to set a created_at and updated_at value on create methods. Also, if you pass it an array as calue, it tells MY_Model, that the first element is a created_at field type, the second element is a updated_at field type (and the third element is a deleted_at field type if $this->soft_deletes is set to TRUE)
		        $this->timestamps = FALSE;

        		// you can enable (TRUE) or disable (FALSE) the "soft delete" on records. Default is FALSE, which means that when you delete a row, that one is gone forever
            	$this->soft_deletes = FALSE;

                parent::__construct();
        }

        public function get_list($cpf = null)
        {
                $query = $this->db->get($this->table, array('cpf_professor' => $cpf)); //, 10);
                return $query->result_array();
        }


        public function get_item($id)
        {
                $query = $this->db->get_where($this->table, array($this->primary_key => $id));
                return $query->result_array();
        }

        public function insert($data = null)
        {
            $this->load->helper('url');

            $data = array(
               'ativ_nome' => $this->input->post('ativNome'),
               'ativ_horas' => $this->input->post('ativHoras'),
               'cpf_professor' => $this->input->post('ativProfCpf')
            );
            if(!isset($data)){
                return false;
            }
            return $this->db->insert($this->table, $data);
        }


        public function edit($id = 0)
        {

            $this->load->helper('url');

            $data = array(
               'ativ_nome' => $this->input->post('ativNome'),
               'ativ_horas' => $this->input->post('ativHoras'),
               'cpf_professor' => $this->input->post('ativProfCpf')
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
        
        /*
        public function insert_dummy()
        {

            $insert_data = array(
                array(
                    'Ativ_id' => '1',
                    'Ativ_nome' => 'Pesquisa',
                    'prof_cpf' => '33322211100',
                    'prof_greatTitle' => 'Doutorado',
                    'prof_areaFormation' => 'Matemática',
                    'prof_linkLattes' => 'http://lattes.com.br/joeldias',
                    'prof_lastUpdate' => '2015-03-01',
                    'prof_data_admissao' => '2017-06-23',
                    'prof_matricula' => 'A2111',
                    'prof_membro_nde' => 'Sim',
                    'prof_membro_colegiado' => 'Não',
                    'prof_capacitado' => 'Sim'
                ),
                array(
                    'prof_id' => '2',
                    'prof_name' => 'Olavo Bilac',
                    'prof_cpf' => '44433322211',
                    'prof_greatTitle' => 'Pós-Doutorado',
                    'prof_areaFormation' => 'Literatura',
                    'prof_linkLattes' => 'http://lattes.com.br/obilac',
                    'prof_lastUpdate' => '2000-06-20',
                    'prof_data_admissao' => '2017-06-23',
                    'prof_matricula' => 'A2122',
                    'prof_membro_nde' => 'Não',
                    'prof_membro_colegiado' => 'Não',
                    'prof_capacitado' => 'Sim'
                ),
            );
            $this->db->insert_batch($this->table, $insert_data);
        }
         * */
}

?>
