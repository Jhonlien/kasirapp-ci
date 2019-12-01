<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAuth extends CI_Model {
	public function login_rules()
	{
		return [
					[
						'field'	=>'username',
						'label'	=>'Username',
						'rules'	=>'required|trim|valid_email',
						'errors' => 
									[
										'required' => 'Username tidak boleh kosong!'
									]
					],
					[
						'field'	=>'password',
						'label'	=>'Password',
						'rules'	=>'required|trim',
						'errors' => [
										'required' => 'Password tidak boleh kosong!'
									]
					]
				];
	}

}