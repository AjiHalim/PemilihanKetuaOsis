<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_user_model extends CI_Model {
	public function daftar_user($a)
	{	
		$nama = $this->db->get_where("user", ['level' => $a]);
		return $nama->result_array();
	}public function daftar_user2($a)
	{	
		$nama = $this->db->get_where("user", ['id_user' => $a]);
		return $nama->result_array();
	}
	public function info_admin($a) {
		$data = $this->db->get_where('user', ['id_user' => $a]);
		return $data->result_array();
	}public function data_calon() {
		$name = $_SESSION['id'];
		$data = $this->db->query("select * from user cross join data_pribadi where user.id_user = '$name' && data_pribadi.id_user = '$name' ")->result_array();
		return $data;
	}public function data_kerja() {
		$name = $_SESSION['id'];
		$data = $this->db->query("select * from data_caketos_cawalos where id_user = '$name'")->result_array();
		return $data;
	}
}