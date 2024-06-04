<?php 

class Datacustomer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Datacustomer_model');
    }

    public function index(){
        $data['customer'] = $this->Datacustomer_model->getData();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/datacustomer/view', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function form_customer() {
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/datacustomer/form');
        $this->load->view('admin/templetes/footer');
    }

    public function detail($id_customer){
        $data['customer'] = $this->Datacustomer_model->detail($id_customer);
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/datacustomer/detail', $data);
        $this->load->view('admin/templetes/footer');
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
            'password'   => md5($this->input->post('password')),
            'email'      => $this->input->post('email'),
            'alamat'      => $this->input->post('alamat'),
            'jns_kelamin'      => $this->input->post('jns_kelamin'),
            'no_tlp'      => $this->input->post('no_tlp'),
            'no_ktp'      => $this->input->post('no_ktp'),
            'foto'       => $file_name['file_name'] 
        );

        $simpan = $this->db->insert('customer', $data);
        if($simpan = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('administrator/Datacustomer');
        } else {
            redirect('administrator/Datacustomer/form_customer');
        }
    }

    public function edit($id_customer) {
        $data['datacustomer'] = $this->Datacustomer_model->edit($id_customer);
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/datacustomer/edit', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function update() {
        $id_customer = $this->input->post('id_customer');
        $config['upload_path']          = 'assets/images/customer';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        if (!empty($_FILES['foto']['name'])) {
            $this->upload->do_upload('foto');
            $upload = $this->upload->data();
            $image = $upload['file_name'];

            $data = array(
                'nama_customer' => $this->input->post('nama_customer'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'email'         => $this->input->post('email'),
                'alamat'        => $this->input->post('alamat'),
                'jns_kelamin'   => $this->input->post('jns_kelamin'),
                'no_tlp'        => $this->input->post('no_tlp'),
                'no_ktp'        => $this->input->post('no_ktp'),
                'foto'          => $image
            );
            $id = $this->db->get_where('customer',['id_customer' => $id_customer])->row();
            $update = $this->Datacustomer_model->update($id_customer, $data);
            if ($update = true) {
                $this->session->set_flashdata('info', 'Data berhasil diupdate');
                unlink('assets/images/customer/'.$id->foto);
                redirect('administrator/datacustomer');
            }
        } else {
            $data = array(
                'nama_customer' => $this->input->post('nama_customer'),
                'username'      => $this->input->post('username'),
                'email'      => $this->input->post('email'),
                'password'      => $this->input->post('password'),
                'alamat'        => $this->input->post('alamat'),
                'jns_kelamin'   => $this->input->post('jns_kelamin'),
                'no_tlp'        => $this->input->post('no_tlp'),
                'no_ktp'        => $this->input->post('no_ktp'),
            );

            $update = $this->Datacustomer_model->update($id_customer, $data);
            if ($update = true) {
                $this->session->set_flashdata('info', 'Data berhasil disimpan');
                redirect('administrator/Datacustomer');
            }
        }
    }

    public function delete($id_customer) {
        $id = $this->db->get_where('customer',['id_customer' => $id_customer])->row();
        $delete = $this->Datacustomer_model->delete($id_customer);
        if ($delete = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            unlink('assets/images/customer/'.$id->foto);
            redirect('administrator/datacustomer');
        }
    }
}
?>