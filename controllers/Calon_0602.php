<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!isset($_SESSION['username'])) {
			redirect("/User");
		}	
		// echo md5("a");
		// exit();
	}
	public function index()
	{
		$this->load->view("calon/header_calon");
			$this->load->view('komponen/content');
		$this->load->view('calon/footer_calon');
	}public function info()
	{	
		// data pemilu
		$this->load->model("info_data_model");
		
		$data['total']= $this->info_data_model->info();

		// print_r($data['total']);
		// exit();
		foreach ($data['total'] as $value) {
			$id_tahun = $value['id_tahun'];
		}

		$data['kode'] = $this->db->get_where("kode_random", ['id_tahun' => $id_tahun])->result_array();

		// print_r($data['kode']);
		// exit();
		// datapribadi
		$this->load->model("daftar_user_model");
		$data['list'] = $this->daftar_user_model->data_calon();
		$data['kerja'] = $this->daftar_user_model->data_kerja();
		$this->load->view("calon/header_calon");
			$this->load->view('calon/info_calon', $data);
		$this->load->view('calon/footer_calon');
	}public function edit()
	{	$this->load->model("daftar_user_model");
		$data['list'] = $this->daftar_user_model->data_calon();
		$data['kerja'] = $this->daftar_user_model->data_kerja();
		$this->load->view("calon/header_calon");
			$this->load->view('calon/edit_calon', $data);
		$this->load->view('calon/footer_calon');
	}
	public function proses_update(){
		$this->load->model('isi_model');
		// print_r($_POST);
		// exit();
		
		if ($_POST['kirim']) {
			$nama = $_POST['nama'];
			$kelas = $_POST['kelas'];
			$alamat = $_POST['alamat'];
			$no = $_POST['no'];
			$organisasi = $_POST['pengalaman'];

			$nama_wakil = $_POST['nama_wakil'];
			$kelas_wakil = $_POST['kelas_wakil'];
			$alamat_wakil = $_POST['alamat_wakil'];
			$no_wakil = $_POST['no_wakil'];
			$organisasi_wakil = $_POST['pengalaman_wakil'];

			// update data kerja 
			$visi = $_POST['visi'];
			$misi = $_POST['misi'];
			$proker = $_POST['program'];
			$video = $_POST['video'];

		}
		// $this->isi_model->tambah_data();
		$data = $this->isi_model->isi_data($nama, $kelas, $organisasi, $no, $nama_wakil, $kelas_wakil, $organisasi_wakil, $no_wakil, $visi, $misi, $proker, $video, $alamat, $alamat_wakil );
		
	}
	 public function file_save()
	{
		$this->load->view("calon/header_calon");
			$this->load->view('calon/edit_calon');
		$this->load->view('calon/footer_calon');
	}
	 public function file_upload()
	{
		$this->load->view("calon/header_calon");
			$this->load->view('calon/edit_calon');
		$this->load->view('calon/footer_calon');
	}
}
// echo $data[0]['username']; karena result array