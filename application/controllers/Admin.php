<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		$data['title'] = 'Dashboard';
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar',$data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}

}