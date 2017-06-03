<?php
class Matrizes extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('matriz_model');
                $this->load->model('curso_model');    
                $this->load->model('disciplina_model'); 
                //$this->load->model('professor_model');    
                $this->load->helper('url_helper');
        }


        public function index()
        {
            //$data['matriz'] = $this->matriz_model->get_list();
            $data['curso'] = $this->curso_model->get_list();
            $this->load->view('templates/header');
            $this->load->view('matriz/list', $data);
            $this->load->view('templates/footer');

        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            //$data['coordenador'] = $this->professor_model->get_list();

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
                $this->load->view('matriz/create', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->matriz_model->insert();
                $this->index();
            }
        }

        public function detail($id = NULL)
        {
                $data['matriz_item'] = $this->matriz_model->get_item($id);
                $data['curso_item'] = array();
                $data['discip_item'] = array();           

                foreach($data['matriz_item'] as $indice) {
                    array_push($data['curso_item'], $this->curso_model->get_item($indice['curso_id']));
                    array_push($data['discip_item'], $this->disciplina_model->get_item($indice['discip_id']));
                }

                $this->load->view('templates/header');
                $this->load->view('matriz/detail', $data);
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

            $data['matriz_item'] = $this->matriz_model->get_item($id);
            $data['curso_item'] = $this->curso_model->get_item($data['matriz_item']['0']['curso_id']);
            $data['discip_item'] = array();  
            $data['discip_list'] = $this->disciplina_model->get_list();        
            
            foreach($data['matriz_item'] as $indice) {
                array_push($data['discip_item'], $this->disciplina_model->get_item($indice['discip_id'])['0']['discip_id']);
            }
    
            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
//            $this->form_validation->set_rules('cursoTipo', 'Tipo do curso', 'required');
//            $this->form_validation->set_rules('cursoModalidade', 'Modalidade', 'required');
//            $this->form_validation->set_rules('cursoNome', 'Nome do curso', 'required');
//            $this->form_validation->set_rules('cursoHabilitacao', 'Habilitacao', 'required');
//            $this->form_validation->set_rules('cursoLocal', 'Local de oferta', 'required');
//            $this->form_validation->set_rules('cursoTurnos', 'Turnos', 'required');
//            $this->form_validation->set_rules('cursoVagas', 'Vagas', 'required');
//            $this->form_validation->set_rules('cursoCarga', 'Carga horária', 'required');
//            $this->form_validation->set_rules('cursoRegime', 'Regime', 'required');
//            $this->form_validation->set_rules('cursoPeriodo', 'Periodos', 'required');
//            $this->form_validation->set_rules('cursoCoord', 'Coordenador do curso', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('matriz/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->matriz_model->edit($id);
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
                
            $ata_item = $this->matriz_model->get_item($id);
        
            $this->matriz_model->delete($id);        
            $this->index();        
    }

}

?>
