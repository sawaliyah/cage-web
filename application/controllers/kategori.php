<?php
    class Kategori extends CI_Controller{
        public function tenda(){
            $data['tenda']=$this->model_kategori->data_tenda()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/tenda',$data);
            $this->load->view('templates/footer');
        }
        public function matras(){
            $data['matras']=$this->model_kategori->data_matras()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/matras',$data);
            $this->load->view('templates/footer');
        }
        public function alatmasak(){
            $data['alatmasak']=$this->model_kategori->data_alat_masak()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/alatmasak',$data);
            $this->load->view('templates/footer');
        }
        public function alatmakan(){
            $data['alatmakan']=$this->model_kategori->data_alat_makan()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/alatmakan',$data);
            $this->load->view('templates/footer');
        }
        public function perlengkapan_lainnya(){
            $data['perlengkapan_lainnya']=$this->model_kategori->data_perlengkapan_lainnya()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/perlengkapan_lainnya',$data);
            $this->load->view('templates/footer');
        }
    }
?>