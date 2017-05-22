<?php

    class Ata_model extends CI_Model {

        public $date;
        public $local;
        public $participants;
        public $deliberations;

        public function __construct() {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
        }

        public function get_list()
        {
                $query = $this->db->get('ata'); //, 10);
                return $query->result_array();
        }


        public function get_item($id)
        {
                $query = $this->db->get_where('ata', array('ata_id' => $id));
                return $query->result_array();
        }

        public function insert() 
        {
            $this->load->helper('url');

            $data = array(
               'ata_date' => $this->input->post('ataData'),
               'ata_local' => $this->input->post('ataLocal'),
               'ata_participants' => $this->input->post('ataPartic'),
               'ata_deliberations' => $this->input->post('ataDelib'),
            );
        
            return $this->db->insert('ata', $data);
        }


        public function edit($id = 0)
        {

            $this->load->helper('url');
 
            $data = array(
               'ata_date' => $this->input->post('ataData'),
               'ata_local' => $this->input->post('ataLocal'),
               'ata_participants' => $this->input->post('ataPartic'),
               'ata_deliberations' => $this->input->post('ataDelib'),
            );
        
            if ($id == 0) {
                //return $this->db->insert('news', $data);
                echo "<p>ID Inválido</p>";
            } else {
                $this->db->where('ata_id', $id);
                return $this->db->update('ata', $data);
            }



            //$this->load->helper('url');

            //$data = array(
            //   'ata_date' => $this->input->post('ataData'),
            //   'ata_local' => $this->input->post('ataLocal'),
            //   'ata_participants' => $this->input->post('ataPartic'),
            //   'ata_deliberations' => $this->input->post('ataDelib'),
            //);
        
            //return $this->db->insert('ata', $data);

            //return $this->db->update('ata', $data);
        }

        public function delete($id)
        {
            $this->db->where('ata_id', $id);
            return $this->db->delete('ata');
        }
}

?>
