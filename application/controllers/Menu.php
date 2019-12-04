<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MMenu');
		if(!$this->session->userdata('role_id')){
			redirect('/');
		}
		elseif($this->session->userdata('role_id') == '2'){
			redirect('/kasir');
		}
	}

	public function index(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->MMenu->insert();
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Sukses Menambahkan Menu!</div>');
			redirect('/menu');
		}
		$get_menu = $this->MMenu->get_all();
		$data = [
				'title' => 'Menu',
				'get_all_menu' => $get_menu
				];
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar',$data);
		$this->load->view('admin/content/menu/menu', $data);
		$this->load->view('template/footer');
	}

	public function edit($id){
		$get_id = $this->MMenu->getById($id);
		$data = [
				'title' => 'Edit Menu', 
				'menu' => $get_id
			];
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar');
		$this->load->view('admin/content/menu/edit_menu', $data);
		$this->load->view('template/footer');
	}

	public function update($id){

	}

	public function delete($id){
		$this->MMenu->delete($id);
		$this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">Sukses Menghapus Menu!</div>');
		redirect('/menu');
	}

}