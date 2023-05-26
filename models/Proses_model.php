<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proses_model extends CI_Model {
	var $pilih = "pemilih";
	var $kode = "kode_random";
	public function pilih_calon($calon, $kode)
	{	
		$data = $this->db->get_where($this->kode, ['digit' => $kode])->result_array();
		
		if ($data) {
			$id = $data[0]['id_kode'];
			$seleksi = $this->db->get_where($this->pilih, ['id_kode' => $id ])->result_array();
			// ambil id_kode
			if (!$seleksi) {
				$data_2 = array(
					'pilih' => $calon,
					'id_kode' => $data[0]['id_kode'],
					'id_tahun' => 1,
				);
				$list = $this->db->insert($this->pilih, $data_2);
				if ($list) {
					redirect('/pemilih/pesan');
				}
			}else {
				return "1";
			}
		}else{
			return "2";
			//jika return "0" maka akan di anggap null 
		}
		
	}
}
// harus di pilsah jadi insert harus pake array utuh no array property