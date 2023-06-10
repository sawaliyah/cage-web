<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){
		$data['barang']=$this->model_barang->tampil_data()->result();


		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('shop/home',$data);
		$this->load->view('templates/footer');

	}
	public function detail_produk($id_brg){
		$data['prod']=$this->model_barang->detail_brg($id_brg);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail/detail_barang',$data);
		$this->load->view('templates/footer');
	}

	public function cari(){
		$key = $this->input->post('katakunci');
		$data['barang']=$this->model_barang->get_key($key);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('shop/pencarian',$data);
		$this->load->view('templates/footer');
	}
}
