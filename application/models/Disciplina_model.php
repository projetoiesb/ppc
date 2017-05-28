<?php

    class Disciplina_model extends MY_Model {


        public $table = 'disciplina';
        public $primary_key = 'discip_id';

        public $date;
        public $local;
        public $participants;
        public $deliberations;

        public function __construct() {
                parent::__construct();
                // Your own constructor code
                $this->load->database();

                // you can disable the use of timestamps. This way, MY_Model won't try to set a created_at and updated_at value on create methods. Also, if you pass it an array as calue, it tells MY_Model, that the first element is a created_at field type, the second element is a updated_at field type (and the third element is a deleted_at field type if $this->soft_deletes is set to TRUE)
		        $this->timestamps = FALSE;

        		// you can enable (TRUE) or disable (FALSE) the "soft delete" on records. Default is FALSE, which means that when you delete a row, that one is gone forever
            	$this->soft_deletes = FALSE;
        }

        public function get_list()
        {
                $query = $this->db->get($this->table);
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
               'discip_name' => $this->input->post('discipNome'),
               'discip_description' => $this->input->post('discipDesc'),
               'discip_code' => $this->input->post('discipCod'),
               'discip_semester' => $this->input->post('discipSemestre'),
               'discip_workload' => $this->input->post('discipCarga'),
            );
        
            return $this->db->insert($this->table, $data);
        }


        public function edit($id = 0)
        {

            $this->load->helper('url');
 
            $data = array(
               'discip_name' => $this->input->post('discipNome'),
               'discip_description' => $this->input->post('discipDesc'),
               'discip_code' => $this->input->post('discipCod'),
               'discip_semester' => $this->input->post('discipSemestre'),
               'discip_workload' => $this->input->post('discipCarga'),
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
                    'discip_id' => '1',
                    'discip_name' => 'Programação',
                    'discip_description' => 'Descrição da disciplina de programação',
                    'discip_code' => 'PROG-ADS-001',
                    'discip_semester' => '1o Semestre',
                    'discip_workload' => '90'
                ),
                array(
                    'discip_id' => '2',
                    'discip_name' => 'Arquitetura de Computadores',
                    'discip_description' => 'Descrição da disciplina de arquitetura',
                    'discip_code' => 'ARQ-ADS-002',
                    'discip_semester' => '2o Semestre',
                    'discip_workload' => '70'
                ),
            );
            $this->db->insert_batch($this->table, $insert_data);
        }
}

?>
