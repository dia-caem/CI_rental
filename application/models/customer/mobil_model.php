<?php 

    class mobil_model extends CI_model {
        public function getMobil() {
            return $this->db->get('mobil')->result();
        }

        public function detail($id_mobil){
            $this->db->where('id_mobil', $id_mobil);
            return $this->db->get('mobil')->row_array();
        }
    }