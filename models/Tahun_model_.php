<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_model extends CI_Model {
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
			  $tahunaktif = $this->lihat_tahun();	

			  $this->db->query("INSERT INTO statistic (statistic_pemilih,id_dataCalon,id_tahun)
			  SELECT count(*) suara, pemilih.id_user,".$tahunaktif[0]['id_tahun']."
			  FROM pemilih
			  LEFT JOIN data_pribadi ON data_pribadi.id_user = pemilih.id_user
			  GROUP BY pemilih.id_user where data_pribadi.id_tahun = '$tahunaktif[0]['id_tahun']' ");

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
	public function set_token($batas){
		$list = 0;
		while ($list < $batas) {
			 $data = array(
			 	'digit' => rand(1,1000),
			 	'id_tahun' => 1,
			 );

			 $this->db->insert('kode_random', $data);	

			$list++;
		}
	}public function get_token()
	{
		$this->db->select('digit,id_tahun');
		$this->db->from('kode_random');
		$data = $this->db->get()->result_array();

		return $data;
	}

}
		