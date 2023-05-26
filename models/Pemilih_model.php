<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemilih_model extends CI_Model {
		public function calon_index($calon)
		{	
			$data = $this->db->query("select * from data_pribadi cross join data_caketos_cawalos where data_pribadi.id_seri = '$calon' && data_caketos_cawalos.id_seri = '$calon' ")->result_array();
			return $data;
		}
}