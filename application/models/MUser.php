<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {
	private $_table = 'users_tb';

	public function get_all(){
		return $this->db->query("SELECT `users_tb`.`*`, `roles_tb`.`role` 
								 FROM `$this->_table` 
								 JOIN `roles_tb` ON `users_tb`.`role_id` = `roles_tb`.`id` 
								 ORDER BY `id` DESC")->result_array();
	}
}