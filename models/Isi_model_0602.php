<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isi_model extends CI_Model {
	var $nama = "user";
	var $isi = "data_pribadi";
	
	public function tahun() {
		//akses tahun aktif
		$this->db->select('id_tahun');
		$this->db->from('tahun');
		$this->db->where('status', 2);
		$tahun = $this->db->get()->result_array();

		return $tahun;
	}

	public function tambah($a, $b, $c)
	{	
		
		// $this->db->select('id_tahun');
		// $this->db->from('tahun');
		// $this->db->where('status', 2);
		// $tahun = $this->db->get()->result_array();

		$tahun = $this->tahun();
		foreach ($tahun as $value) {
			$id_tahun  = $value['id_tahun'];
		}

		if ($tahun) {
			if ($c == "calon") {

				$nama_calon = "calon ke ";
				$no = $this->check_calon();

				$isi = array(
					'username' => $a,
					'password' => md5($b),
					'level'	   => $c,
					'name' => $nama_calon . $no,
					'id_tahun' => $id_tahun,
				);
				$data = $this->db->insert($this->nama, $isi);
			}else {
				$isi = array(
					'username' => $a,
					'password' => md5($b),
					'level'	   => $c,
					'id_tahun' => $id_tahun,
				);
				$data = $this->db->insert($this->nama, $isi);
			}
		} else {
			$this->session->set_flashdata("nihil", true);
			redirect('admin/tambah_user');
		}
		

		
	}
	
	public function isi_data($nama, $kelas, $organisasi, $no, $nama_wakil, $kelas_wakil, $organisasi_wakil, $no_wakil, $visi, $misi, $proker, $video, $alamat, $alamat_wakil)
	{
		$id_user = $_SESSION['id'];

		//akses tahun aktif

		$list = array(
			'nama' => $nama,
			// 'nis' => $,
			'alamat' => $alamat,
			'kelas' => $kelas,
			'peng_organisasi' => $organisasi,
			// 'agama' => $f,
			'no-hp' => $no,

			'nama_wakil' => $nama_wakil,
			// 'nis_wakil' => $bb,
			'alamat_wakil' => $alamat_wakil,
			'kelas_wakil' => $kelas_wakil,
			'peng_organisasi_wakil' => $organisasi_wakil,
			// 'agama_wakil' => $fb,
			'no_hp_wakil' => $no_wakil,

		);
		
		// data kerja
		$list_data = array(
			'visi' => $visi ,
			'misi' => $misi,
			'program_kerja' =>  $proker,
			'video' => $video,
		);
		
		$this->db->where('id_user', $_SESSION['id']);
		$this->db->update("data_caketos_cawalos", $list_data);

		$this->db->where('id_user', $_SESSION['id']);
		$data = $this->db->update($this->isi, $list);

	 	if($data) {
			redirect("calon/info");
		}else {
			echo "<h3>Maaf Gagal Menambahkan Data</h3>";
		}
	}

	public function check_calon()
	{

		$tahun = $this->tahun();
		// $this->db->select('id_tahun');
		// $this->db->from('tahun');
		// $this->db->where('status', 2);
		// $tahun = $this->db->get()->result_array();

		foreach ($tahun as $value) {
			$id_tahun  = $value['id_tahun'];
		}

		if ($tahun) {
			// $seri = $this->db->query("select id_seri from data_caketos_cawalos where")->result_array();
			$this->db->select('id_seri');
			$this->db->from("data_caketos_cawalos");
			$this->db->where("id_tahun", $id_tahun);
			$seri = $this->db->get()->result_array();

			$urut = 1;
			$urut += count($seri);
			// echo $urut . " <br/>";
			// print_r($seri);
			// exit();

			return $urut;
		}else {
			$this->session->set_flashdata("nihil", true);
			redirect('admin/tambah_user');
		}
		// foreach ($seri as $no_urut) {
		// 	$urut = $no_urut['id_seri'];

		// 	if ($urut < 3) {
		// 		$urut++;
		// 	}else {
		// 		return 1;
		// 	}
		// }
	}
	public function isi_data_kosong()
	{
		$id = $this->db->query("select id_user from user where id_user =(select max(id_user) from user)")->result_array();
		// hitung maksimal jumlah calon
		$seri = $this->db->query("select id_seri from data_caketos_cawalos")->result_array();

		// foreach ($seri as $no_urut) {
		// 	$urut = $no_urut['id_seri'];

		// 	if ($urut < 3) {
		// 		$urut++;
		// 	}
		// }

		$tahun = $this->tahun();
		foreach ($tahun as $value) {
			$id_tahun  = $value['id_tahun'];
		}

		if ($tahun) {
			$urut = $this->check_calon();

			foreach ($id as $key) {
				$id_user = $key['id_user'];
			}
			
			$list = array(
				'nama' => "",
				'nis' => "",
				'alamat' => "",
				'kelas' => "",
				'peng_organisasi' => "",
				'agama' => "",
				'no-hp' => "",

				'nama_wakil' => "",
				'nis_wakil' => "",
				'alamat_wakil' => "",
				'kelas_wakil' => "",
				'peng_organisasi_wakil' => "",
				'agama_wakil' => "",
				'no_hp_wakil' => "",

				'id_user ' => $id_user,
				'id_seri' => $urut,
				'id_tahun' => $id_tahun,
			);
			
			// data kerja
			$list_data = array(
				'visi' => "" ,
				'misi' => "",
				'program_kerja' =>  "",
				'id_user' => $id_user,
				'id_tahun' => $id_tahun,
				'id_seri' => $urut,
			);
			$this->db->insert("data_caketos_cawalos", $list_data);
			
			$data = $this->db->insert($this->isi, $list);
			if(isset($data)) {
				redirect("admin/anggota");
			}else {
				echo "<h3>Maaf Gagal Menambahkan Data</h3>";
			}
		} else {
			$this->session->set_flashdata("nihil", true);
			redirect('admin/tambah_user');
		}

	}
}
