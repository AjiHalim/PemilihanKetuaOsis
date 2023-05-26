<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!isset($_SESSION['username'])) {
			redirect("/User");
		}elseif ($_SESSION['level'] == 'calon') {
			redirect('calon');
		}elseif ($_SESSION['level'] == 'admin') {
			redirect('Admin');
		}

		// if ($_SESSION['level'] == 'anggota') {
		// 	redirect("/Anggota"); AKAN MEREDIRECT TERUS TANPA HENTI 
		// }
	}

	public function index()
	{
		$this->load->model('tahun_model');
		
		$data['tahun'] = $this->tahun_model->all_tahun();
		
		$this->load->view('komponen/header', $data);
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('anggota/homeAnggota');
		$this->load->view('komponen/Fotter');
	}
	public function lihat_tahun(){
		$this->load->model('tahun_model');
		$data['list'] = $this->tahun_model->tahun();
		$data['tambah'] = $this->tahun_model->get_status1();
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->model('info_data_model');
		
		$data['selesai'] = $this->info_data_model->end();
		$this->load->view('komponen/header', $data);
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('anggota/tahun_anggota', $data);
		$this->load->view('komponen/Fotter');
	}
	// untuk info user
	public function info_admin(){
		$this->load->model('daftar_user_model');
		$data['admin'] = $this->daftar_user_model->info_admin($_SESSION['id']);

		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('admin/info_user', $data);
		$this->load->view('komponen/Fotter');
	}
	//untuk edit info user
	public function edit_data(){
		$this->load->model('daftar_user_model');

		$data['list'] = $this->daftar_user_model->daftar_user($_SESSION['level']);

		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();
		$this->load->view('komponen/header', $data);
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('admin/edit_data', $data);
		$this->load->view('komponen/Fotter');
	}public function info_pemilu(){
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
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('anggota/info_pemilu_agt', $data);
		// $this->load->view('komponen/Fotter');
	}public function status_tahun(){
		$this->load->model('tahun_model');

		$data['list'] = $this->tahun_model->update_status();
		
	}
	// fungsi untuk lihat token versi anggota
	public function lihat_token() {
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->all_tahun();
		$data['token'] = $this->tahun_model->lihat_token($this->uri->segment(3));

		$this->load->view('komponen/header', $data);
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('admin/lihat_token', $data);
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
			$this->load->view('anggota/sidebar_anggota');
			$this->load->view('admin/data_tahun', $data);
		$this->load->view('komponen/Fotter');
	}

}