<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		//frobiden place to code 
	}

	public function index()
	{
		if (isset($_SESSION['id'])) {
			if ($_SESSION['level'] == "admin") {
				redirect("/admin/");
			}elseif ($_SESSION['level'] == "calon") {
				redirect("/calon/");
			}
		}
		$this->load->view('komponen/login');
	}

	public function cek_login() {
		$this->load->library('session');

		$this->db->where('username', $_POST['nama']);
		$this->db->where('password', md5($_POST['sandi']));
		// $this->db->where('password', $_POST['sandi']);
		$query = $this->db->get('user')->result_array();

		if (count($query) > 0) {

			foreach ($query as $key ) {
				$pangkat = $query[0]['level'];
			}
			if ( $pangkat == "calon") {
				$this->load->model("daftar_user_model", 'DUM');

				$data_ = $this->DUM->calon_($query[0]['id_user']);

				if (!$data_) {
					echo $this->session->set_flashdata('msg', "<div class = 'card mb-4 bg-warning' style ='padding : 10px'>Mohon Maaf Anda Sudah Tidak Bisa Mengakses Aplikasi Lagi<br/>Dikarenakan Pemilihan Untuk Periode Anda Sudah Berakhir </div>");
					redirect('/user');
				} 			
			}

			$nama = $query[0]['name'];//Jika di luar if maka data akan error bree
			$newdata = array(
				'id'=> $query[0]['id_user'], 
		        'username'  => $_POST['nama'],
		        'level'     => $query[0]['level'],
		        'nama' => $query[0]['name'],
			);
			
			$this->session->set_userdata($newdata);
			// $this->session->set_userdata("sayu", "sudah usia sudah");

			if ($newdata['level'] == 'calon') {
				redirect('/calon');
			}
			if ($newdata['level'] == 'admin') {
				redirect('/admin');
			}if ($newdata['level'] == 'anggota') {
				redirect('/anggota');
			}
		}else {
			echo $this->session->set_flashdata('msg', "<div class='card mb-4 bg-warning' style ='padding : 10px'>Mohon Maaf Username atau Password Yang Anda Masukan Salah</div>");
			redirect('/user');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$data = base_url();

		redirect($data);
	}
	// estereag

	function pesan()
	{
		$this->load->view('komponen/estereag');
	}
}
