<?php

class Register extends CI_Controller {


    public function index(){
        $this->load->view('customer/template/header');
        $this->load->view('customer/viewheader/register');
        $this->load->view('customer/template/footer');
    }

    public function simpan() {
        $config['upload_path']          = 'assets/images/customer';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $file_name = $this->upload->data();

        $data = array(
            'nama_customer' => $this->input->post('nama_customer'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'email'         => $this->input->post('email'),
            'alamat'        => $this->input->post('alamat'),
            'jns_kelamin'   => $this->input->post('jns_kelamin'),
            'no_tlp'        => $this->input->post('no_tlp'),
            'no_ktp'        => $this->input->post('no_ktp'),
            'foto'          => $file_name['file_name'],
            'role_id'       => '2'
        );

        $simpan = $this->db->insert('customer', $data);
        if($simpan = true) {
            $this->session->flashdata('info', 'Data berhasil disimpan');
            redirect('logs');
        } else {
            redirect('customer/register');
        }
    }
}