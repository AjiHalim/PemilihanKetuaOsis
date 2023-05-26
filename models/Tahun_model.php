<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tahun_model extends CI_Model {
	var $nama = "tahun";
	// public function isi() JANGAN HAPUS
	// {	
	// 	$this->db->select('*');
	// 	$this->db->from($this->nama);
	// 	return $this->db->get()->result_array();		
	// }
	public function check_tahun()
	{
		$this->db->select('status');
		$this->db->from($this->nama);
		$data = $this->db->get()->result_array();

		$kondisi = 0;
		foreach ($data as $value) {
			if ($value['status'] == 1) {
				$kondisi = $value['status'];			
			}
		}

		if ($kondisi) {
			return 1;
		}else{
			return 0;
		}
	}
	public function tahun()
	{
		$this->db->select('*');
		$this->db->from($this->nama);
		return $this->db->get()->result_array();
	}
	public function buat_tahun(){
		$data = $this->db->query('select tahun_pemilu from tahun where tahun_pemilu = (select MAX(tahun_pemilu) from tahun )')->result_array();
		// nanti ganti pake codeignitor fungsi

		foreach ($data as $value) {
			$no = ++$value['tahun_pemilu'];
		}
		$tahun = array(
			'tahun_pemilu' => $no,
			'status' => 2,
		);
		$simpan = $this->db->insert($this->nama, $tahun);
		if ($simpan) {
			redirect('admin/lihat_tahun');
		}
	}
	public function lihat_tahun()
	{
		$this->db->select("tahun_pemilu, status");
		$this->db->from($this->nama);
		$this->db->where('status', 1);

		$data = $this->db->get()->result_array();

		return $data;
	}public function update_status(){
		
		$this->db->where('status', 1);
			  $data = $this->db->update($this->nama, ['status' => 0]);	
		if ($data) {
			redirect('admin/lihat_tahun');
		}
	}public function aktif(){
	 $this->db->where('status', 2);
	  $data = $this->db->update($this->nama, ['status' => 1]);

	  if ($data) {
	  	redirect("admin/lihat_tahun");
	  }
	}
	public function get_status1() {
		$list = $this->db->get_where('tahun', ['status' => 2])->result_array();
		$jumlah = 0;

		foreach ($list as $value) {
			$jumlah++;
		}
		return $jumlah;
	}

}
		