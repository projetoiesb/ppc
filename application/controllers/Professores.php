<?php
class Professores extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('professor_model');
                $this->load->helper('url_helper');
        }


        public function index()
        {
            $data['professor'] = $this->professor_model->get_list();
            $this->load->view('templates/header');
            $this->load->view('professor/list', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('profNome', 'Nome', 'required');
            $this->form_validation->set_rules('profCpf', 'CPF', 'required');
            $this->form_validation->set_rules('profTitulo', 'Maior titulação', 'required');
            $this->form_validation->set_rules('profAreaForm', 'Area de formação', 'required');
            $this->form_validation->set_rules('profLink', 'Link Lattes', 'required');
            $this->form_validation->set_rules('profAtualiza', 'Última atualização', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('professor/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->professor_model->insert();
                //$this->load->view('ata_list_view');
                $this->index();
            }
        }

        public function detail($id = NULL)
        {
                $data['professor_item'] = $this->professor_model->get_item($id);

                $this->load->view('templates/header');
                $this->load->view('professor/detail', $data);
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

            $data['professor_item'] = $this->professor_model->get_item($id);

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('profNome', 'Nome', 'required');
            $this->form_validation->set_rules('profCpf', 'CPF', 'required');
            $this->form_validation->set_rules('profTitulo', 'Maior titulação', 'required');
            $this->form_validation->set_rules('profAreaForm', 'Area de formação', 'required');
            $this->form_validation->set_rules('profLink', 'Link Lattes', 'required');
            $this->form_validation->set_rules('profAtualiza', 'Última atualização', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('professor/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->professor_model->edit($id);
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
                
            $ata_item = $this->professor_model->get_item($id);
        
            $this->professor_model->delete($id);        
            $this->index();        
    }

}

?>
