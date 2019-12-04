<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMenu extends CI_Model {
	private $_table = 'menus_tb';

	public function get_all(){
		return $this->db->query("SELECT `menus_tb`.`*`, `jenis_tb`.`jenis` 
								 FROM `$this->_table` 
								 JOIN `jenis_tb` ON `menus_tb`.`jenis_id` = `jenis_tb`.`id` 
								 ORDER BY `id` DESC")->result_array();
	}

	public function getById($id){
		return $this->db->query("SELECT * FROM `menus_tb` WHERE `id` = {$id}")->result_array();
	}

	public function insert(){
		$nama_menu 	= $this->input->post('nama');
		$harga 		= $this->input->post('harga');
		$jenis_id	= $this->input->post('jenis_id');

		$data = [
					'nama' => $nama_menu, 
					'harga' =>$harga, 
					'jenis_id' => $jenis_id
				];
		$this->db->insert($this->_table, $data);
	}

	public function update($id,$nama,$harga, $jenis_id){
		return $this->db->query("UPDATE `menus_tb` VALUES 
								`nama` 		= {$nama}, 	
								`harga` 	= {$harga},
								`jenis_id` 	= {$jenis_id} 
								WHERE `id` 	=  {$id}");
	}

	public function delete($id){
		return $this->db->query("DELETE FROM `menus_tb` WHERE `id` = {$id}");		
	}

}