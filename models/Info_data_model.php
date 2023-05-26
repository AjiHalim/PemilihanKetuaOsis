<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_data_model extends CI_Model {

	public function info()
	{
		$tahun = $this->db->get_where("tahun", ['status' => 1])->result_array();
		$id = 0;
		if ($tahun) {
			$id = $tahun[0]['id_tahun'];	
		}
		$this->db->select("pemilih.pilih, kode_random.digit, tahun.tahun_pemilu, pemilih.id_tahun, data_pribadi.id_seri");
		$this->db->from("pemilih");
		$this->db->join("kode_random", 'kode_random.id_kode = pemilih.id_kode');
		$this->db->join("tahun", 'tahun.id_tahun = pemilih.id_tahun');
		$this->db->join('data_pribadi', 'data_pribadi.id_user = pemilih.id_user');
		$this->db->where('pemilih.id_tahun', $id );
		// $this->db->where('id_tahun', $id ); AMBIGU
		
		$data = $this->db->get()->result_array();
		return $data;
		
	}
	public function end()
	{
		$tahun = $this->db->get_where("tahun", ['status' => 1])->result_array();
		// jika tidak ada tahun maka id nya 10
		$id = 0;	

		if($tahun){
			//Megambil data id_tahun_aktif
			$id = $tahun[0]['id_tahun'];
			// Data Pemilih
			$this->db->select('id_kode');
			$this->db->from("pemilih");
			$this->db->where('id_tahun', $id);
			$data_pemilih = $this->db->get()->result_array();
			// Data Kode
			$this->db->select('id_kode');
			$this->db->from("kode_random");
			$this->db->where('id_tahun', $id);
			$data_kode = $this->db->get()->result_array();

			//ambil status di tahun
			
			$jml_kode = 0;
			$jml_pemilih = 0;
			// meghitung data
			foreach ($data_pemilih as $key ) {
				$jml_pemilih++;
				
			}foreach ($data_kode as $key ) {
				$jml_kode++;
			}
			//melakukan perbandingan untuk tombol
			if ( $jml_kode == $jml_pemilih ) {
				return 1;
			}else {
				return 0;
			}
		}else {
			return 2;
		}
		// print_r($tahun);
	}public function jml_calon()
	{
		// $this->db->select('*');
		// $data = $this->db->get('data_pribadi')->result_array();
		$tahun = $this->db->get_where("tahun", ['status' => 1])->result_array();

		$id = 0;	

		if ($tahun) {
			$id = $tahun[0]['id_tahun'];
			$data = $this->db->get_where('data_pribadi',['id_tahun' => $id] )->result_array();

			return $data;
		} else {
			$this->session->set_flashdata("nihil", true);
		}

	}

	public function Data_tahun($value='')
	{
		$this->db->select("statistic.statistic_pemilih, user.name, tahun.tahun_pemilu, tahun.id_tahun");
		$this->db->from("statistic");
		$this->db->join("user", "user.id_user = statistic.id_dataCalon");
		$this->db->join("tahun", "tahun.id_tahun = statistic.id_tahun");
		$this->db->where("statistic.id_tahun", $value);
		return $this->db->get()->result_array();

	}
	// public function check_seri()
	// {
	// 	$this->db->select('data_pribadi.id_seri, pemilih.id_user');
	// 	$this->db->from('data_pribadi');
	// 	$this->db->join('pemilih', 'data_pribadi.id_user = pemilih.id_user');

	// 	$data = $this->db->get()->result_array();
	// 	return $data;

	// }
}