<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MMeja');
		if(!$this->session->userdata('role_id')){
			redirect('/');
		}
		elseif($this->session->userdata('role_id') == '2'){
			redirect('/kasir');
		}
	}

	public function index(){
		// if($this->input->server('REQUEST_METHOD') == 'POST'){
		// 	$this->MMenu->insert();
		// 	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Sukses Menambahkan Menu!</div>');
		// 	redirect('/menu');
		// }
		$get_meja = $this->MMeja->get_all();
		//print_r($get_meja); die;
		$data = [
				'title' => 'Menu',
				'get_all_meja' => $get_meja
				];
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar',$data);
		$this->load->view('admin/content/meja/meja', $data);
		$this->load->view('template/footer');
	}
}