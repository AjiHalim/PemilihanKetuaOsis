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
		// echo md5("admin123");
		// exit();
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
	}
	public function generate() {
		$this->load->model('tahun_model');
		if (isset($_POST['kirim'])) {
			$token = $this->tahun_model->buat_token($_POST['jumlah']);
			// echo "<pre>";
			// print_r($token);
			// echo "</pre>";
			$res = $this->tahun_model->insert_kode_random($_POST['id'],$token);
			if ($res) {
				redirect('/admin/lihat_tahun');
			}
		}

		$data = [];
		
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$data['tahun_generate'] = $this->tahun_model->get_tahunbyid($this->uri->segment(3));
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('komponen/header', $data);
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/generete_token', $data);
		$this->load->view('komponen/Fotter');
	}

	public function lihat_token() {
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->all_tahun();
		$data['token'] = $this->tahun_model->lihat_token($this->uri->segment(3));

		$this->load->view('komponen/header', $data);
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/lihat_token', $data);
		// $this->load->view('komponen/Fotter');
	}

	public function hapus_token() {
		$this->db->delete('kode_random', array('id_kode' => $this->uri->segment(4)));
		redirect('/admin/lihat_token/' . $this->uri->segment(3));
	}


	public function lihat_tahun(){
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
	}public function anggota($id = ''){
		$this->load->model('daftar_user_model');

		$data['admin'] = $this->daftar_user_model->daftar_user("admin");
			$data['calon'] = $this->daftar_user_model->daftar_user("calon");
				$data['anggota'] = $this->daftar_user_model->daftar_user("anggota");

		$data['info'] = 0;
		if ($id) {
			$data['info'] = $this->daftar_user_model->info_calon();
		}

		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/daftar_anggota2', $data);
		$this->load->view('komponen/Fotter');
	}public function edit_data(){
		$this->load->model('daftar_user_model');

		$data['list'] = $this->daftar_user_model->edit_admin($_SESSION['id']);

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
				if ($data == 4) {
					$pesan = 1;
					redirect('/admin/tambah_user/' . $pesan);
				}else {
					$query = $this->isi_model->tambah($username, $password, $pangkat);
					$kosong = $this->isi_model->isi_data_kosong(); 
				}
			}else{
				$query = $this->isi_model->tambah($username, $password, $pangkat);
				redirect("admin/anggota");
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
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();

		$data['list']= $this->info_data_model->info();

		$data['kode'] = $this->db->get("kode_random")->result_array();
		$data['jml'] = $this->info_data_model->jml_calon();
		// $data['pemilih']=$this->info_data_model->check_seri();
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
	
	
	public function data_tahun($id_tahun)
	{	$this->load->model('tahun_model');
		$this->load->model('Info_data_model', "indm");

		$data['data_tahun'] = $this->indm->Data_tahun($id_tahun);
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$data['kode'] = $this->tahun_model->kode($id_tahun);
		$data['pemilih'] = $this->tahun_model->pemilih($id_tahun);

		$this->load->view('komponen/header', $data);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/data_tahun', $data);
		$this->load->view('komponen/Fotter');
	}

	public function delete($id = ''){
		$this->load->model('daftar_user_model', 'DUM');

		$data = $this->DUM->hapus($id);

		if ($data) {
			$this->session->set_flashdata('hapus', "<div class ='card mt-4 bg-success' style='padding : 10px'>Selamat Data Sudah Berhasil Di hapus </div>");
			redirect('admin/anggota');
		} else {
			$this->session->set_flashdata('hapus', "<div class ='card mt-4 bg-warning' style='padding : 10px'>Maaf Anda Gagal Menghapus </div>");
			redirect('admin/anggota');
		}
		
	}

	public function update_status($var = ""){
		$this->load->model('daftar_user_model', 'DUM');

		$anggota= $this->DUM->daftar_user2($var);
		foreach ($anggota as $value) {
			$username = $anggota[0]['username'];
		}

		$tingkat = $this->DUM->update($var);


		if ($tingkat) {
			$this->session->set_flashdata('upgrade', "<div class ='card mt-4 bg-success' style='padding : 10px'>Status Anggota Atas Username :  <?=$username ;?>Berhasil Di Update</div>");
			redirect('admin/anggota');
		} else {
			$this->session->set_flashdata('upgrade', "<div class ='card mt-4 bg-warning' style='padding : 10px'>Status Anggota Atas Username : <?=$username ;?> Gagal Di Update</div>");
			redirect('admin/anggota');
		}
		
	}

}
