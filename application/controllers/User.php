<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MUser');
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
		$get_user = $this->MUser->get_all();
		//print_r($get_user); die;
		$data = [
				'title' => 'User',
				'get_all_users' => $get_user
				];
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar',$data);
		$this->load->view('admin/content/user/user', $data);
		$this->load->view('template/footer');
	}
}