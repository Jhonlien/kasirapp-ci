<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/asidebar');
		$this->load->view('kasir/index');
		$this->load->view('template/footer');
	}
}