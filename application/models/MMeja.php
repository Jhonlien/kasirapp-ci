<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMeja extends CI_Model {
	private $_table = 'meja_tb';

	public function get_all(){
		return $this->db->query("SELECT `meja_tb`.`*`
								 FROM `$this->_table` 
								 ORDER BY `id` DESC")->result_array();
	}
}