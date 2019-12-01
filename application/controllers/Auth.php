<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MAuth');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
    public function index(){
    	$rules = $this->MAuth->login_rules();
    	$this->form_validation->set_rules($rules);
    	if($this->form_validation->run() == false){
            if(!$this->session->userdata('role_id')){
                $this->load->view('auth/auth');
            }
            elseif($this->session->userdata('role_id') == 1){
                redirect('/admin/dashboard');
            }
            else{
                redirect('/kasir');
            }
    	}
    	$this->cek_login();
    }

    public function cek_login(){
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$q = $this->db->get_where('users_tb',['username' => $username])->row_array();
    	if($q){
    		if(password_verify($password, $q['password'])){
    			$data = ['username' => $q['username'], 
    					 'role_id' => $q['role_id']];
    			$this->session->set_userdata($data);
    			redirect('/checkrole');
    		}
    		else{
    			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Anda Salah!</div>');
    		}
    	}
    	else{
    		$this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">Username Tidak Ditemukan!</div>');
    	}
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Logout Sukses!</div>');
        redirect('/');
    }
    
}