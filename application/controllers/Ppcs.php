<?php
class Ppcs extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('ppc_model');
                $this->load->model('curso_model');    
                $this->load->helper('url_helper');
        }


        public function index()
        {
            $data['ppc'] = $this->ppc_model->get_list();
            $data['curso'] = $this->curso_model->get_list();
            $this->load->view('templates/header');
            $this->load->view('ppc/list', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['curso'] = $this->curso_model->get_list();

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('curso', 'Curso', 'required');
            $this->form_validation->set_rules('ppcCursoPerfil', 'Perfil do curso', 'required');
            $this->form_validation->set_rules('ppcEgressoPerfil', 'Perfil do egresso', 'required');
            $this->form_validation->set_rules('ppcAcessoCurso', 'Forma de acesso ao curso', 'required');
            $this->form_validation->set_rules('ppcRepresentacao', 'Representação gráfica de um perfil de formação', 'required');
            $this->form_validation->set_rules('ppcAvalEnsino', 'Sistema de avaliação do processo Ensino-Aprendizagem', 'required');
            $this->form_validation->set_rules('ppcAvalCurso', 'Sistema de avaliação do projeto do curso', 'required');
            $this->form_validation->set_rules('ppcTcc', 'Trabalho de conclusão de curso', 'required');
            $this->form_validation->set_rules('ppcEstagio', 'Trabalho de conclusão de curso', 'required');
            $this->form_validation->set_rules('ppcPda', 'Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('ppc/create', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->ppc_model->insert();
                $this->index();
            }
        }

        public function detail($id = NULL)
        {
                $data['ppc_item'] = $this->ppc_model->get_item($id);
                $data['curso'] = $this->curso_model->get_list();

                $this->load->view('templates/header');
                $this->load->view('ppc/detail', $data);
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

                $data['ppc_item'] = $this->ppc_model->get_item($id);
                $data['curso'] = $this->curso_model->get_list();

            // Estas funções aceitam 3 parametros: nome do campo, nome Human Readable, regras
            $this->form_validation->set_rules('curso', 'Curso', 'required');
            $this->form_validation->set_rules('ppcCursoPerfil', 'Perfil do curso', 'required');
            $this->form_validation->set_rules('ppcEgressoPerfil', 'Perfil do egresso', 'required');
            $this->form_validation->set_rules('ppcAcessoCurso', 'Forma de acesso ao curso', 'required');
            $this->form_validation->set_rules('ppcRepresentacao', 'Representação gráfica de um perfil de formação', 'required');
            $this->form_validation->set_rules('ppcAvalEnsino', 'Sistema de avaliação do processo Ensino-Aprendizagem', 'required');
            $this->form_validation->set_rules('ppcAvalCurso', 'Sistema de avaliação do projeto do curso', 'required');
            $this->form_validation->set_rules('ppcTcc', 'Trabalho de conclusão de curso', 'required');
            $this->form_validation->set_rules('ppcEstagio', 'Trabalho de conclusão de curso', 'required');
            $this->form_validation->set_rules('ppcPda', 'Politica de atendimento a pessoas com deficiência e/ou mobilidade reduzida', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('ppc/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->ppc_model->edit($id);
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
                
            $ata_item = $this->ppc_model->get_item($id);
        
            $this->ppc_model->delete($id);        
            $this->index();        
    }

}

?>
