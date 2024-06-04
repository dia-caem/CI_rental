<?php

class Mobil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Mobil_model');
        $this->load->helper('tgl_indo_helper');
    }

    public function index() {
        $data['mobil'] = $this->Mobil_model->getMobil();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/mobil/view', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function form() {
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/mobil/tambah');
        $this->load->view('admin/templetes/footer');
    }

    public function simpan() {
        $config['upload_path']          = 'assets/images/mobil';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_mobil');
        $file_name = $this->upload->data();

        $data = array(
            'nama_mobil'            => $this->input->post('nama_mobil'),
            'tahun_mobil'           => $this->input->post('tahun_mobil'),
            'kapasitas_mobil'       => $this->input->post('kapasitas_mobil'),
            'harga_mobil'           => preg_replace("/[^0-9]/",'', $this->input->post('harga_mobil')),
            'warna_mobil'           => $this->input->post('warna_mobil'),
            'bbm_mobil'             => $this->input->post('bbm_mobil'),
            'plat_no_mobil'         => $this->input->post('plat_no_mobil'),
            'ac_mobil'              => $this->input->post('ac_mobil'),
            'media_player_mobil'    => $this->input->post('media_player_mobil'),
            'denda_mobil'           => preg_replace("/[^0-9]/",'', $this->input->post('denda_mobil')),
            'foto_mobil'            => $file_name['file_name'], 
            'status_mobil'          => $this->input->post('status_mobil'),
            'created_mobil'         => $this->input->post('created_mobil'),
        );

        $simpan = $this->db->insert('mobil', $data);
        if($simpan = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('administrator/Mobil');
        }
        
    }
    
    public function detail($id_mobil){
        $data['mobil'] = $this->Mobil_model->detail($id_mobil);
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/mobil/detail', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function edit($id_mobil){
        $data['mobil'] = $this->Mobil_model->detail($id_mobil);
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/mobil/edit', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function update(){
        $id_mobil = $this->input->post('id_mobil');
        $config['upload_path']          = 'assets/images/mobil';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        if (!empty($_FILES['foto_mobil']['name'])) {
            $this->upload->do_upload('foto_mobil');
            $upload = $this->upload->data();
            $image = $upload['file_name'];

            $data = array(
                'nama_mobil'            => $this->input->post('nama_mobil'),
                'tahun_mobil'           => $this->input->post('tahun_mobil'),
                'kapasitas_mobil'       => $this->input->post('kapasitas_mobil'),
                'harga_mobil'           => preg_replace("/[^0-9]/",'', $this->input->post('harga_mobil')),
                'warna_mobil'           => $this->input->post('warna_mobil'),
                'bbm_mobil'             => $this->input->post('bbm_mobil'),
                'plat_no_mobil'         => $this->input->post('plat_no_mobil'),
                'ac_mobil'              => $this->input->post('ac_mobil'),
                'media_player_mobil'    => $this->input->post('media_player_mobil'),
                'denda_mobil'           => preg_replace("/[^0-9]/",'', $this->input->post('denda_mobil')),
                'foto_mobil'            => $image, 
                'status_mobil'          => $this->input->post('status_mobil'),
                'created_mobil'         => $this->input->post('created_mobil'),
            );
            $id = $this->db->get_where('mobil',['id_mobil' => $id_mobil])->row();
            $update = $this->Mobil_model->update($id_mobil, $data);
            if ($update = true) {
                $this->session->set_flashdata('info', 'Data berhasil disimpan');
                unlink('assets/images/mobil/'.$id->foto_mobil);
                redirect('administrator/mobil');
            }
        } else {
            $data = array(
                'nama_mobil'            => $this->input->post('nama_mobil'),
                'tahun_mobil'           => $this->input->post('tahun_mobil'),
                'kapasitas_mobil'       => $this->input->post('kapasitas_mobil'),
                'harga_mobil'           => preg_replace("/[^0-9]/",'', $this->input->post('harga_mobil')),
                'warna_mobil'           => $this->input->post('warna_mobil'),
                'bbm_mobil'             => $this->input->post('bbm_mobil'),
                'plat_no_mobil'         => $this->input->post('plat_no_mobil'),
                'ac_mobil'              => $this->input->post('ac_mobil'),
                'media_player_mobil'    => $this->input->post('media_player_mobil'),
                'denda_mobil'           => preg_replace("/[^0-9]/",'', $this->input->post('denda_mobil')),
                'status_mobil'          => $this->input->post('status_mobil'),
                'created_mobil'         => $this->input->post('created_mobil'),
            );

            $update = $this->Mobil_model->update($id_mobil, $data);
            if ($update = true) {
                $this->session->set_flashdata('info', 'Data berhasil diupdate');
                redirect('administrator/mobil');
            }
        }
    }

    public function delete($id_mobil){
        $id = $this->db->get_where('mobil',['id_mobil' => $id_mobil])->row();
        $delete = $this->Mobil_model->delete($id_mobil);
        if ($delete = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            unlink('assets/images/mobil/'.$id->foto_mobil);
            redirect('administrator/mobil');
        }
    }
}