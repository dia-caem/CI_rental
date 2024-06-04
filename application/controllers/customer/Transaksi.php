<?php

class Transaksi extends CI_Controller {


    public function index(){
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        mobil mb,customer cs WHERE tr.id_mobil = mb.id_mobil
        AND tr.id_customer = cs.id_customer 
        AND cs.id_customer = '$customer' ORDER BY id_rental DESC")->result();
        $this->load->view('customer/template/header');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('customer/template/footer');
    }

    public function pembayaran($id){
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        mobil mb,customer cs WHERE tr.id_mobil = mb.id_mobil
        AND tr.id_customer = cs.id_customer 
        AND tr.id_rental = '$id' ORDER BY id_rental DESC")->result();
        $this->load->view('customer/template/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('customer/template/footer');
    }

    public function pembayaran_aksi(){
        $id_rental = $this->input->post('id_rental');
        $config['upload_path']          = 'assets/images/bukti_pembayaran';
        $config['allowed_types']        = 'pdf|jpg|jpeg|png|tiff';
        $this->load->library('upload', $config);
            $this->upload->do_upload('bukti_pembayaran');
            $upload = $this->upload->data();
            $image = $upload['file_name'];

        $data = array (
            'bukti_pembayaran' => $this->input->post('bukti_pembayaran')
        );
        $update = $this->db->update('transaksi', $data);
        $query = $this->db->query("UPDATE transaksi SET bukti_pembayaran = '$image'  WHERE id_rental = '$id_rental'");
        $this->session->set_flashdata('pesan','<div class="alert alert-success
        alert-dismissible fade show" role="alert">
        Bukti Pembayaran Anda Berhasil Di Upload!.
        <button type="button" class="close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>');
        redirect('customer/transaksi');
    }

    public function batal_transaksi($id_rental){
        $id = $this->db->get_where('transaksi',['id_rental' => $id_rental])->row();
        $id_mobil = $this->db->get_where('mobil',['id_mobil' => $id_mobil])->row();

        $data = array(
            'status_mobil' => '1'
        );
        $update = $this->db->update('mobil', $data);
        $delete = $this->db->query("DELETE FROM transaksi WHERE id_rental = '$id_rental'");
        if ($delete = true) {
            $this->session->set_flashdata('pesan','<div class="alert alert-success
            alert-dismissible fade show" role="alert">
            Transaksi Berhasil Dibatalkan.
            <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>');
            redirect('customer/transaksi');
        }
    }
}
