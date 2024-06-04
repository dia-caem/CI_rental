<?php

class Dashboard extends CI_COntroller {
    
    public function __construct() {
    parent::__construct();
    $this->load->model('customer/Mobil_model');
    $this->load->helper('tgl_indo_helper');
}

    public function index() {
        $data['mobil'] = $this->Mobil_model->getMobil();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/templetes/view', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function detail(){
        $data['mobil'] = $this->Mobil_model->detail($id_mobil);
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/detail', $data);
        $this->load->view('admin/templetes/footer');
    }
}