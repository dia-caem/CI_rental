<?php

class Admin_model extends CI_Model {

    public function prosesLogin($email,$password) {
        $pass = md5($password);
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        $query = $this->db->get('admin');

        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $sess = array(
                    'id_admin'      => $row->id_admin,
                    'nama_admin'    => $row->nama_admin,
                    'email'         => $row->email,
                    'password'      => $row->password,
                    'foto'          => $row->foto,
                );
                $this->session->set_userdata($sess);
            }
            redirect('administrator/Dashboard');
        }else{
            $this->session->set_flashdata('info', 'Silahkan periksa kembali email dan password anda');
            redirect('Admin');
        }
    }

}