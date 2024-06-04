<?php 

class Rental extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('customer/Mobil_model');
    }

    public function tambah_rental($id_mobil){
            $data['mobil'] = $this->Mobil_model->detail($id_mobil);
            $this->load->view('customer/template/header');
            $this->load->view('customer/tambah_rental', $data);
            $this->load->view('customer/template/footer');
    }

    public function tambah_rental_aksi(){
        $id_customer        = $this->session->userdata('id_customer');
        $id_mobil           = $this->input->post('id_mobil');
        $tgl_rental         = $this->input->post('tgl_rental');
        $tgl_kembali        = $this->input->post('tgl_kembali');
        $denda_mobil        = $this->input->post('denda_mobil');
        $harga_mobil        = $this->input->post('harga_mobil');

        $data = array (
            'id_customer'           => $id_customer,
            'id_mobil'              => $id_mobil,
            'tgl_rental'            => $tgl_rental,
            'tgl_kembali'           => $tgl_kembali,
            'denda_mobil'           => $denda_mobil,
            'harga_mobil'           => $harga_mobil, 
            'tgl_pengembalian'     => '-',
            'status_rental'         => 'Belum Selesai',
            'status_pengembalian'   => 'Belum Kembali',
        );

        $simpan = $this->db->insert('transaksi', $data);
        $query = $this->db->query("UPDATE mobil SET status_mobil = '0'  WHERE id_mobil = '$id_mobil'");
        if($update = true) {
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
            Transaksi Berhasil, Silahkan Checkout!
          </div>
            </div>');
            redirect('Customer/dashboard');
        } else {
            redirect('Customer/rental/tambah_rental');
        }
    }
}
?>