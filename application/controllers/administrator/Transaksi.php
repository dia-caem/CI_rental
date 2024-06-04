<?php 

class Transaksi extends CI_Controller{

    public function index(){
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        mobil mb,customer cs WHERE tr.id_mobil = mb.id_mobil
        AND tr.id_customer = cs.id_customer")->result();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function pembayaran($id){
        $where = array('id_rental' => $id);
        $data['pembayaran'] =  $this->db->query("SELECT * FROM transaksi WHERE
                id_rental = '$id'")->result();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function cek_pembayaran(){
        $id_rental              = $this->input->post('id_rental');
        $status_pembayaran      = $this->input->post('status_pembayaran');

        $data = array (
            'status_pembayaran' => $status_pembayaran,
        );
        
        $update = $this->db->update('transaksi', $data);
        $query = $this->db->query("UPDATE transaksi SET status_pembayaran = '$status_pembayaran'  WHERE id_rental = '$id_rental'");
        redirect('administrator/transaksi');
    }

    public function download_pembayaran($id_rental){
        $this->load->helper('download');
        $query = $this->db->get('transaksi');
        return $query->row_array();
        $file = 'assets/images/bukti_pembayaran'.$query['bukti_pembayaran'];
        force_download($file, NULL);
    }

    public function transaksi_selesai($id){
        $where = array('id_rental' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental = '$id'")->result();
        $this->load->view('admin/templetes/menu');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('admin/templetes/footer');
    }

    public function transaksi_selesai_aksi(){
        $id_rental              = $this->input->post('id_rental');
        $tgl_pengembalian       = $this->input->post('tgl_pengembalian');
        $status_rental          = $this->input->post('status_rental');
        $status_pengembalian    = $this->input->post('status_pengembalian');
        $tgl_kembali            = $this->input->post('tgl_kembali');
        $denda_mobil            = $this->input->post('denda_mobil');



        $data1 = array (
            'tgl_pengembalian'      => $tgl_pengembalian,
            'status_rental'         => $status_rental,
            'status_pengembalian'   => $status_pengembalian,
        );

        $data2 = array (
            'status_mobil' => '1'
        );

        $update = $this->db->update('transaksi', $data1);
        $update = $this->db->update('mobil', $data2);
        $query = $this->db->query("UPDATE transaksi SET 
        tgl_pengembalian = '$tgl_pengembalian',
        status_rental = '$status_rental',
        status_pengembalian = '$status_pengembalian'
        WHERE id_rental = '$id_rental'");
        $this->session->set_flashdata('pesan','<div class="alert alert-success
        alert-dismissible fade show" role="alert">
        Transaksi Berhasil Di Update.
        <button type="button" class="close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>');
        redirect('administrator/transaksi');
    }

    public function transaksi_batal(){
        $data = array(
            'status_mobil' => '1'
        );
        $update = $this->db->update('mobil', $data);
            redirect('administrator/transaksi');
        
    }
}
?>