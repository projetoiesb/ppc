<?php
class Disciplinas extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('disciplina_model');
                $this->load->helper('url_helper');
        }


        public function index()
        {
            $data['disciplina'] = $this->disciplina_model->get_list();
            $this->load->view('templates/header');
            $this->load->view('disciplina/list', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('discipNome', 'Nome', 'required');
            $this->form_validation->set_rules('discipDesc', 'Descrição', 'required');
            $this->form_validation->set_rules('discipCod', 'Código', 'required');
            $this->form_validation->set_rules('discipSemestre', 'Semestre', 'required');
            $this->form_validation->set_rules('discipCarga', 'Carga horária', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('disciplina/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->disciplina_model->insert();
                //$this->load->view('ata_list_view');
                $this->index();
            }
        }

        public function detail($id = NULL)
        {
                $data['discip_item'] = $this->disciplina_model->get_item($id);

                $this->load->view('templates/header');
                $this->load->view('disciplina/detail', $data);
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

            $data['discip_item'] = $this->disciplina_model->get_item($id);

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('discipNome', 'Nome', 'required');
            $this->form_validation->set_rules('discipDesc', 'Descrição', 'required');
            $this->form_validation->set_rules('discipCod', 'Código', 'required');
            $this->form_validation->set_rules('discipSemestre', 'Semestre', 'required');
            $this->form_validation->set_rules('discipCarga', 'Carga horária', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('disciplina/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->disciplina_model->edit($id);
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
                
            $discip_item = $this->disciplina_model->get_item($id);
        
            $this->disciplina_model->delete($id);        
            $this->index();        
    }

}

?>
