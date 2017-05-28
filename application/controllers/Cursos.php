<?php
class Cursos extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('curso_model');
                $this->load->model('professor_model');    
                $this->load->helper('url_helper');
        }


        public function index()
        {
            $data['curso'] = $this->curso_model->get_list();
            $data['coordenador'] = $this->professor_model->get_list();
            $this->load->view('templates/header');
            $this->load->view('curso/list', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['coordenador'] = $this->professor_model->get_list();

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('cursoTipo', 'Tipo do curso', 'required');
            $this->form_validation->set_rules('cursoModalidade', 'Modalidade', 'required');
            $this->form_validation->set_rules('cursoNome', 'Nome do curso', 'required');
            $this->form_validation->set_rules('cursoHabilitacao', 'Habilitacao', 'required');
            $this->form_validation->set_rules('cursoLocal', 'Local de oferta', 'required');
            $this->form_validation->set_rules('cursoTurnos', 'Turnos', 'required');
            $this->form_validation->set_rules('cursoVagas', 'Vagas', 'required');
            $this->form_validation->set_rules('cursoCarga', 'Carga horária', 'required');
            $this->form_validation->set_rules('cursoRegime', 'Regime', 'required');
            $this->form_validation->set_rules('cursoPeriodo', 'Periodos', 'required');
            $this->form_validation->set_rules('cursoCoord', 'Coordenador do curso', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('curso/create', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->curso_model->insert();
                $this->index();
            }
        }

        public function detail($id = NULL)
        {
                $data['curso_item'] = $this->curso_model->get_item($id);
                $data['coordenador'] = $this->professor_model->get_list();

                $this->load->view('templates/header');
                $this->load->view('curso/detail', $data);
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

            $data['curso_item'] = $this->curso_model->get_item($id);
            $data['coordenador'] = $this->professor_model->get_list();

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('ataData', 'Data', 'required');
            $this->form_validation->set_rules('ataLocal', 'Local', 'required');
            $this->form_validation->set_rules('ataPartic', 'Participantes', 'required');
            $this->form_validation->set_rules('ataDelib', 'Deliberação', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('curso/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->curso_model->edit($id);
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
                
            $ata_item = $this->curso_model->get_item($id);
        
            $this->curso_model->delete($id);        
            $this->index();        
    }

}

?>
