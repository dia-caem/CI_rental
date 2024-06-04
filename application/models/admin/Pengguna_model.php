<?php

class Pengguna_model extends CI_Model {

    public function getData() {
        return $this->db->get('admin')->result();
    }

    public function edit($id_admin) {
        $this->db->where('id_admin', $id_admin);
        return $this->db->get('admin')->row_array();
    }

    public function update($id_admin, $data) {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
    }

    public function delete($id_admin) {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
    }
}