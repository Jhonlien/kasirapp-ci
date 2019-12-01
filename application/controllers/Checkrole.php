<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkrole extends CI_Controller {
	public function index(){
		if($this->session->userdata('role_id')==1){
			redirect('/admin/dashboard');
		}
		else{
			redirect('/kasir');
		}
	}
}