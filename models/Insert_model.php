<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_model extends CI_Model {
	var $nama = "user";
	public function isi()
	{	
		$this->db->select('*');
		$this->db->from($this->nama);
		return $this->db->get()->result_array();
		// return $this->db->get()->row(); just out one data
	}
}
		// return $this->db->get("user"); absurd keluarnya

 		// $this->db->get("user");
 	 	// $data = $this->db->query("select * from user where username = 'ad_utama' ");
 	 	// return $data->result_array();
		// return $this->db->get("user")->result_array();