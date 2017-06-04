<?php
class Simulacoes extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                //$this->load->model('simulacao_model');

        }

        public function create_options($min, $max)
        {
            $result = "";
            for($i=$min; $i<=$max; $i++) {
                $result = $result.'<option value="'.$i.'">Nota '.$i.'</option>';
            }

            return $result;
        }

        public function soma_resultados($resultados)
        {

            $result = array();

            foreach($resultados as $key=>$val)
            {
                $result[$key] = $val;
            }
            return array_sum($result);

        }

        public function index()
        {
            $data['options'] = $this->create_options(1, 5);
            $this->load->view('templates/header');
            $this->load->view('simulacao/list', $data);
            $this->load->view('templates/footer');
        }

        public function calculate()
        {
            //$data['resultado'] = $this->simulacao_model->calculate();

            $this->load->helper('form');
            $this->load->library('form_validation');

            $dim1 = $this->input->post('dim1');
            $dim2 = $this->input->post('dim2');            
            $dim3 = $this->input->post('dim3');

            $data['dimensao1'] = $this->soma_resultados($dim1) / 8.0;
            $data['dimensao2'] = $this->soma_resultados($dim2) / 4.0;            
            $data['dimensao3'] = $this->soma_resultados($dim3) / 6.0;

            $dimensao123 = array_merge($dim1, $dim2, $dim3);
            $data['geral'] = $this->soma_resultados($dimensao123) / 18.0;
            

            $this->load->view('templates/header');
            $this->load->view('simulacao/calculate', $data);
            $this->load->view('templates/footer');
        }
}

?>
