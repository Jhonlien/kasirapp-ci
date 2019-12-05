<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MMeja');
		if(!$this->session->userdata('role_id')){
			redirect('/');
		}
		elseif($this->session->userdata('role_id') == '1'){
			redirect('/admin/');
		}
	}
	public function index(){
		$get_tables = $this->MMeja->get_all();
		$data['title'] = "Kasir";

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar');
		$this->load->view('kasir/index');
		$this->load->view('template/footer');
	}
}