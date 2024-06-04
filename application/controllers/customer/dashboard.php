<?php 

    class Dashboard extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('customer/Mobil_model');
            $this->load->helper('tgl_indo_helper');
        }

        public function index(){
            $data['mobil'] = $this->Mobil_model->getMobil();
            $this->load->view('customer/template/header');
            $this->load->view('customer/template/view', $data);
            $this->load->view('customer/template/footer');
        }

        public function detail($id_mobil){
            $data['mobil'] = $this->Mobil_model->detail($id_mobil);
            $this->load->view('customer/template/header');
            $this->load->view('customer/detail', $data);
            $this->load->view('customer/template/footer');
          }
    }

?>