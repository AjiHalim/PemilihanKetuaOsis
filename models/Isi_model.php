<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class isi_model extends CI_Model {
	var $nama = "user";
	var $isi = "data_pribadi";
	public function tambah($a, $b, $c)
	{	
		if ($c == "calon") {

			$nama_calon = "calon ke ";
			$no = 1;
			$isi = array(
				'username' => $a,
				'password' => $b,
				'level'	   => $c,
				'name' => $nama_calon . ++$no,
			);
			$data = $this->db->insert($this->nama, $isi);
		}else {
			$isi = array(
				'username' => $a,
				'password' => $b,
				'level'	   => $c,
			);
			$data = $this->db->insert($this->nama, $isi);
		}

		
	}
	public function isi_data($a, $b, $c,$d, $e, $f,$g, $ab, $bb, $cb,$db, $eb, $fb,$gb, $visi, $misi, $program_kerja)
	{
		$id_user = $_SESSION['id'];
		$list = array(
			'nama' => $a,
			'nis' => $b,
			'alamat' => $c,
			'kelas' => $d,
			'jk' => $e,
			'agama' => $f,
			'no-hp' => $g,

			'nama_wakil' => $ab,
			'nis_wakil' => $bb,
			'alamat_wakil' => $cb,
			'kelas_wakil' => $db,
			'jk_wakil' => $eb,
			'agama_wakil' => $fb,
			'no_hp_wakil' => $gb,
		);
		// data kerja
		$list_data = array(
			'file' => "" ,
			'visi' => $visi ,
			'misi' => $misi,
			'program_kerja' =>  $program_kerja,
			'id_tahun' => 1,
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
		$seri = $this->db->query("select id_seri from data_caketos_cawalos")->result_array();

		foreach ($seri as $no_urut) {
			$urut = $no_urut['id_seri'];

			if ($urut < 3) {
				$urut++;
			}else {
				return 1;
			}
		}
	}
	public function isi_data_kosong()
	{
		$id = $this->db->query("select id_user from user where id_user =(select max(id_user) from user)")->result_array();
		// hitung maksimal jumlah calon
		$seri = $this->db->query("select id_seri from data_caketos_cawalos")->result_array();

		foreach ($seri as $no_urut) {
			$urut = $no_urut['id_seri'];

			if ($urut < 3) {
				$urut++;
			}
		}

		foreach ($id as $key) {
			$id_user = $key['id_user'];
		}
		$list = array(
			'nama' => "",
			'nis' => "",
			'alamat' => "",
			'kelas' => "",
			'jk' => "",
			'agama' => "",
			'no-hp' => "",

			'nama_wakil' => "",
			'nis_wakil' => "",
			'alamat_wakil' => "",
			'kelas_wakil' => "",
			'jk_wakil' => "",
			'agama_wakil' => "",
			'no_hp_wakil' => "",

			'id_user ' => $id_user,
			'id_seri' => $urut,
		);
		
		// data kerja
		$list_data = array(
			'file' => "" ,
			'visi' => "" ,
			'misi' => "",
			'program_kerja' =>  "",
			'id_user' => $id_user,
			'id_tahun' => 1,
			'id_seri' => $urut,
		);
		$this->db->insert("data_caketos_cawalos", $list_data);
		
		$data = $this->db->insert($this->isi, $list);
		if(isset($data)) {
			redirect("admin/tambah_user");
		}else {
			echo "<h3>Maaf Gagal Menambahkan Data</h3>";
		}
	}
}
