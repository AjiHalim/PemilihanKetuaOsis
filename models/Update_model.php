<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_model extends CI_Model {
	var $nama = "user";

	public function update($a, $b, $c, $d)
	{
		$this->db->where('id_user', $_SESSION['id']);
		$list = array(
			'username' => $a,
			'password' =>$b,
			'name' => $c, 
			'no-HP' => $d, 
		);
		$data = $this->db->update($this->nama, $list);

		if (isset($data)) {
			redirect('admin/info_admin');
		}
	}
	// public {
		
	// }
}