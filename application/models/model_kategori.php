<?php
    class Model_kategori extends CI_Model{
        public function data_tenda(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Tenda'));
        }
        public function data_matras(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Matras'));
        }
        public function data_alat_makan(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Alat makan'));
        }
        public function data_alat_masak(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Alat masak'));
        }
        public function data_perlengkapan_lainnya(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Perlengkapan lainnya'));
        }
    }
?>