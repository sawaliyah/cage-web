<?php
    class Dashboard_admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('role_id')!='1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda Harus Login Sebagai Admin!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

              redirect('auth/login');
            }
        }
        public function index() {
            
            $a['a']=$this->model_barang->tenda();
            $b['b']=$this->model_barang->matras();
            $c['c']=$this->model_barang->alat_masak();
            $d['d']=$this->model_barang->alat_makan();
            $e['e']=$this->model_barang->p_lainnya();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dashboard',$a+$b+$c+$d+$e);
            $this->load->view('templates_admin/footer');
        }
     
     
    }

?>