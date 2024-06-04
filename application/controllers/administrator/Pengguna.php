<?php

class Pengguna extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Pengguna_model');
    }

    public function index() {
        $data['pengguna'] = $this->Pengguna_model->getData();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/pengguna/view', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function form_pengguna() {
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/pengguna/form');
        $this->load->view('admin/templetes/footer');
    }

    public function simpan() {
        $config['upload_path']          = 'assets/images/pengguna';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $file_name = $this->upload->data();

        $data = array(
            'nama_admin' => $this->input->post('nama_admin'),
            'email'      => $this->input->post('email'),
            'password'   => md5($this->input->post('password')),
            'foto'       => $file_name['file_name'] 
        );

        $simpan = $this->db->insert('admin', $data);
        if($simpan = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('administrator/Pengguna');
        } else {
            redirect('administrator/Pengguna/form_pengguna');
        }
    }

    public function edit($id_admin) {
        $data['pengguna'] = $this->Pengguna_model->edit($id_admin);
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/pengguna/edit', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function update() {
        $id_admin = $this->input->post('id_admin');
        $config['upload_path']          = 'assets/images/pengguna';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        if (!empty($_FILES['foto']['name'])) {
            $this->upload->do_upload('foto');
            $upload = $this->upload->data();
            $image = $upload['file_name'];

            $data = array(
                'nama_admin' => $this->input->post('nama_admin'),
                'email'      => $this->input->post('email'),
                'foto'       => $image
            );
            $id = $this->db->get_where('admin',['id_admin' => $id_admin])->row();
            $update = $this->Pengguna_model->update($id_admin, $data);
            if ($update = true) {
                $this->session->set_flashdata('info', 'Data berhasil disimpan');
                unlink('assets/images/pengguna/'.$id->foto);
                redirect('administrator/pengguna');
            }
        } else {
            $data = array(
                'nama_admin' => $this->input->post('nama_admin'),
                'email'      => $this->input->post('email'),
            );

            $update = $this->Pengguna_model->update($id_admin, $data);
            if ($update = true) {
                $this->session->set_flashdata('info', 'Data berhasil disimpan');
                redirect('administrator/pengguna');
            }
        }
    }

    public function delete($id_admin) {
        $id = $this->db->get_where('admin',['id_admin' => $id_admin])->row();
        $delete = $this->Pengguna_model->delete($id_admin);
        if ($delete = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            unlink('assets/images/pengguna/'.$id->foto);
            redirect('administrator/pengguna');
        }
    }
}