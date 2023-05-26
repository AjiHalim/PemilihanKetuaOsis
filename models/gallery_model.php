<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_model extends CI_Model {
	function gallery_model()
	{
		parent::Model();
	}
	var $table = 'file_save';

	function tambah_foto($rec)
	{
		$this->db->insert('foto', $rec);
	}
}