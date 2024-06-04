<?php

class Auth_model extends CI_Model {

    public function prosesLogin($username,$password) {
        $pass = md5($password);
        $this->db->where('username',$username);
        $this->db->where('password',$pass);
        $query = $this->db->get('customer');

        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $sess = array(
                    'id_customer'      => $row->id_customer,
                    'nama_customer'    => $row->nama_customer,
                    'username'         => $row->username,
                    'email'         => $row->email,
                    'password'      => $row->password,
                    'alamat'        => $row->alamat,
                    'jns_kelamin'   => $row->jns_kelamin,
                    'no_tlp'        => $row->no_tlp,
                    'no_ktp'        => $row->no_ktp,
                    'foto'          => $row->foto,
                );
                $this->session->set_userdata($sess);
            }
            redirect('customer/Dashboard');
        }else{
            $this->session->set_flashdata('info', 'Silahkan periksa kembali username dan password anda');
            redirect('logs');
        }
    }

}