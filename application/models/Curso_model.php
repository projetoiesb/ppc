<?php

    class Curso_model extends MY_Model {

    	public $table = 'curso'; // you MUST mention the table name
    	public $primary_key = 'curso_id'; // you MUST mention the primary key
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
                
                $this->has_one['coordenador'] = 'Professor_model';

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
               'curso_type' => $this->input->post('cursoTipo'),
               'curso_modality' => $this->input->post('cursoModalidade'),
               'curso_name' => $this->input->post('cursoNome'),
               'curso_license' => $this->input->post('cursoHabilitacao'),
               'curso_offerLocal' => $this->input->post('cursoLocal'),
               'curso_turns' => $this->input->post('cursoTurnos'),
               'curso_vacancies' => $this->input->post('cursoVagas'),
               'curso_workload' => $this->input->post('cursoCarga'),
               'curso_regime' => $this->input->post('cursoRegime'),
               'curso_periods' => $this->input->post('cursoPeriodo'),
               'prof_id' => $this->input->post('cursoCoord'),
            );
            return $this->db->insert($this->table, $data);
        }


        public function edit($id = 0)
        {

            $this->load->helper('url');
 
            $data = array(
               'curso_type' => $this->input->post('cursoTipo'),
               'curso_modality' => $this->input->post('cursoModalidade'),
               'curso_name' => $this->input->post('cursoNome'),
               'curso_license' => $this->input->post('cursoHabilitacao'),
               'curso_offerLocal' => $this->input->post('cursoLocal'),
               'curso_turns' => $this->input->post('cursoTurnos'),
               'curso_vacancies' => $this->input->post('cursoVagas'),
               'curso_workload' => $this->input->post('cursoCarga'),
               'curso_regime' => $this->input->post('cursoRegime'),
               'curso_periods' => $this->input->post('cursoPeriodo'),
               'prof_id' => $this->input->post('cursoCoord'),
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
                    'curso_id' => '1',
                    'curso_type' => 'Tipo 1',
                    'curso_modality' => 'Modalidade 1',
                    'curso_name' => 'Literatura',
                    'curso_license' => 'Bacharelado',
                    'curso_offerLocal' => 'Zona Norte',
                    'curso_turns' => 'Matutino',
                    'curso_vacancies' => '80',
                    'curso_workload' => '120',
                    'curso_regime' => 'Semestral',
                    'curso_periods' => '2',
                    'prof_id' => '2',

                ),
                array(
                    'curso_id' => '2',
                    'curso_type' => 'Tipo 2',
                    'curso_modality' => 'Modalidade 2',
                    'curso_name' => 'Matemática',
                    'curso_license' => 'licenciatura',
                    'curso_offerLocal' => 'Zona Sul',
                    'curso_turns' => 'Vespertino',
                    'curso_vacancies' => '50',
                    'curso_workload' => '120',
                    'curso_regime' => 'Anual',
                    'curso_periods' => '4',
                    'prof_id' => '1',

                ),

            );
            $this->db->insert_batch($this->table, $insert_data);
        }
}

?>
