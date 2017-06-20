<?php
class Atividades extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('atividade_model');
                $this->load->model('professor_model');
                $this->load->helper('url_helper');
        }


        public function index($id)
        {
            $data['atividade'] = $this->atividade_model->get_list();
            $data['professor'] = $this->professor_model->get_list();
            $this->load->view('templates/header');
            $this->load->view("professor/list", $data);
            $this->load->view('templates/footer');
        }

        public function create($id){
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            //Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('ativNome', 'Atividade', 'required');
            $this->form_validation->set_rules('ativHoras', 'Horas', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->index($id);
            }
            else
            {
                $this->atividade_model->insert();
                //$this->load->view('ata_list_view');
                $data['professor_item'] = $this->professor_model->get_item($id);
                $data['atividade'] = $this->atividade_model->get_list();
                $this->load->view('templates/header');
                $this->load->view('professor/detail', $data);
                $this->load->view('templates/footer');
            }
        }

        public function detail($id = NULL, $cpf = NULL)
        {
                $data['professor_item'] = $this->professor_model->get_item($id);
                $data['atividade'] = $this->atividade_model->get_list($cpf);
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

            $data['ativ_item'] = $this->atividade_model->get_item($id);

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('ativNome', 'Atividade', 'required');
            $this->form_validation->set_rules('ativHoras', 'Horas', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->index();

            }
            else
            {
                $this->professor_model->edit($id);
                $data['professor_item'] = $this->professor_model->get_item($id);
                
                $this->load->view('templates/header');
                $this->load->view('professor/detail', $data);
                $this->load->view('templates/footer');
            }
        }

        public function delete()
        {
            $id = $this->uri->segment(3);

            if (empty($id))
            {
                show_404();
            }

            $ata_item = $this->atividade_model->get_item($id);

            $this->atividade_model->delete($id);
            $this->index();
    }

}

?>
