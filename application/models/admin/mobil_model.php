<?php

class Mobil_model extends CI_Model {

    public function getMobil() {
        return $this->db->get('mobil')->result();
    }

    public function detail($id_mobil){
        $this->db->where('id_mobil', $id_mobil);
        return $this->db->get('mobil')->row_array();
    }

    public function update($id_mobil, $data){
        $this->db->where('id_mobil', $id_mobil);
        $this->db->update('mobil', $data);
    }

    public function delete($id_mobil){
        $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('mobil');
    }

    public function update_data($table, $data, $where){
        $this->db->update($table,$data,$where);
    }

}