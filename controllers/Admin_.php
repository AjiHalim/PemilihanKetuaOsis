<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!isset($_SESSION['username'])) {
			redirect("/User");
		}	
		if ($_SESSION['level'] == 'calon') {
			redirect('calon');
		}
	}
	
	public function index()
	{
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();

		$this->load->model('info_data_model');

		$data['info'] = $this->info_data_model->info();
		$data['selesai'] = $this->info_data_model->end();

		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/pesan_admin', $data);
		$this->load->view('komponen/Fotter');
	}public function lihat_tahun(){
		$this->load->model('tahun_model');
		$data['list'] = $this->tahun_model->tahun();
		$data['tambah'] = $this->tahun_model->get_status1();
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->model('info_data_model');
		
		$data['selesai'] = $this->info_data_model->end();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/tahun', $data);
		$this->load->view('komponen/Fotter');
	}public function info_admin(){
		$this->load->model('daftar_user_model');
		$data['admin'] = $this->daftar_user_model->info_admin($_SESSION['id']);

		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/info_user', $data);
		$this->load->view('komponen/Fotter');
	}
	public function info_calon(){
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/info_calon');
		$this->load->view('komponen/Fotter');
	}public function tambah_user(){
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/tambahUser');
		$this->load->view('komponen/Fotter');
	}public function anggota(){
		$this->load->model('daftar_user_model');

		$data['admin'] = $this->daftar_user_model->daftar_user("admin");
			$data['calon'] = $this->daftar_user_model->daftar_user("calon");
				$data['anggota'] = $this->daftar_user_model->daftar_user("anggota");

		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/daftar_anggota2', $data);
		$this->load->view('komponen/Fotter');
	}public function edit_data(){
		$this->load->model('daftar_user_model');

		$data['list'] = $this->daftar_user_model->daftar_user($_SESSION['level']);

		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/edit_data', $data);
		$this->load->view('komponen/Fotter');
	}
	public function tambah(){
		$this->load->model('isi_model');

		if (isset($_POST['kirim'])) {
			$username = $_POST['name'];
			$password = $_POST['sandi'];
			$pangkat = $_POST['level'];
			
			if ($pangkat == "calon") {
				$data = $this->isi_model->check_calon();
				if ($data == 1) {
					$pesan = 1;
					redirect('/admin/tambah_user/' . $pesan);
				}else {
					$query = $this->isi_model->tambah($username, $password, $pangkat);
					$kosong = $this->isi_model->isi_data_kosong(); 
				}
			}else{
				$query = $this->isi_model->tambah($username, $password, $pangkat);
				redirect("admin/tambah_user");
			}
			
			
		}else {
			echo "Maaf system error ";
		}

	}public function proses_edit_data(){
		$this->load->model('update_model');

		if (isset($_POST['kirim'])) {
			$username = $_POST['username'];
			$password = $_POST['sandi'];
			$nama = $_POST['name'];
			$no = $_POST['hp'];

			$query = $this->update_model->update($username, $password, $nama, $no);
		}else {
			echo "Maaf system error ";
		}
	}
	public function info_pemilu(){
		$this->load->model("info_data_model");
		
		$data['list']= $this->info_data_model->info();
		$data['kode'] = $this->db->get("kode_random")->result_array();
		$data['jml'] = $this->info_data_model->jml_calon();
		
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/info_pemilu', $data);
		// $this->load->view('komponen/Fotter');
	}public function status_tahun(){
		$this->load->model('tahun_model');

		$data['list'] = $this->tahun_model->update_status();
		
	}public function aktif_pemilu(){
		$this->load->model('tahun_model');
		$this->tahun_model->aktif();	
	}public function create_tahun(){
		$this->load->model('tahun_model');
		$this->tahun_model->buat_tahun();
	}


	public function update_level()
	{
		echo $this->uri->segment(3);
	}
	public function a()
	{
		$this->load->view('start');
	}
	public function token(){
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		if (isset($_POST['kirim'])) {
			$batas = $_POST['batas'];

			$this->tahun_model->set_token($batas);
		}
		$data['kode'] = $this->tahun_model->get_token();

		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/koderandom', $data);
		// $this->load->view('komponen/Fotter');
	}

}
