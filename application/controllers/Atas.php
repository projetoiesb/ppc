<?php
class Atas extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('ata_model');
                $this->load->helper('url_helper');
        }


        public function index()
        {
            $data['ata'] = $this->ata_model->get_list();
            $this->load->view('templates/header');
            $this->load->view('ata/list', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('ataData', 'Data', 'required');
            $this->form_validation->set_rules('ataLocal', 'Local', 'required');
            $this->form_validation->set_rules('ataPartic', 'Participantes', 'required');
            $this->form_validation->set_rules('ataDelib', 'Deliberação', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('ata/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->ata_model->insert();
                //$this->load->view('ata_list_view');
                $this->index();
            }
        }

        public function detail($id = NULL)
        {
                $data['ata_item'] = $this->ata_model->get_item($id);

                $this->load->view('templates/header');
                $this->load->view('ata/detail', $data);
                $this->load->view('templates/footer');
        }

        public function edit() 
        {   
    
            $id = $this->uri->segment(3);

            if (empty($id))
            {
                show_404();
            }

            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['ata_item'] = $this->ata_model->get_item($id);

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('ataData', 'Data', 'required');
            $this->form_validation->set_rules('ataLocal', 'Local', 'required');
            $this->form_validation->set_rules('ataPartic', 'Participantes', 'required');
            $this->form_validation->set_rules('ataDelib', 'Deliberação', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('ata/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->ata_model->edit($id);
                $this->index();
            }
        }

        public function delete()
        {
            $id = $this->uri->segment(3);
        
            if (empty($id))
            {
                show_404();
            }
                
            $ata_item = $this->ata_model->get_item($id);
        
            $this->ata_model->delete($id);        
            $this->index();        
    }

}

?>
