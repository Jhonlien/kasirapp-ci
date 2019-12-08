<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
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
		//print_r($get_tables);die;
		$data = ['tables' => $get_tables, 'title' => 'Kasir'];
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar');
		$this->load->view('kasir/index', $data);
		$this->load->view('template/footer');
	}
}