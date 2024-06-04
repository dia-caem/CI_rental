<?php

class Datacustomer_model extends CI_Model {

    public function getData() {
        return $this->db->get('customer')->result();
    }

    public function edit($id_customer) {
        $this->db->where('id_customer', $id_customer);
        return $this->db->get('customer')->row_array();
    }

    public function detail($id_customer) {
        $this->db->where('id_customer', $id_customer);
        return $this->db->get('customer')->row_array();
    }

    public function update($id_customer, $data) {
        $this->db->where('id_customer', $id_customer);
        $this->db->update('customer', $data);
    }

    public function delete($id_customer) {
        $this->db->where('id_customer', $id_customer);
        $this->db->delete('customer');
    }
}