<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {
	function __construct(){
		parent::__construct();
		// if (!isset($_SESSION['id_kode'])) {
		// 	$data = base_url();

		// 	redirect($data);
		// }
		
	}
	function index_lawas() {
		redirect('/');
		$this->load->model('pemilihan_model');
		 $this->load->model('pemilih_model');

		$data['aktif'] = $this->pemilih_model->pemenang();
		$data['list'] = $this->pemilih_model->data();
		$data['tahun'] = $this->pemilih_model->tahun_calon();
		$data['tahun_depan'] = $this->pemilih_model->tahun_mendatang();
		$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
		$data['data_calon'] = $this->pemilihan_model->get_calon();
		$data['statistik_suara'] = $this->pemilihan_model->get_statistiksuara();
       
		$data['list'] = $this->pemilih_model->foto();
		$data['pesan'] = null;
		// echo "<pre>"; print_r($data); echo "</pre>"; exit;
		// if ($this->uri->segment(3) == 1) {//semua menjadi not array
		// 	$data['pesan'] = "Maaf Kode Random Anda sudah terpakai !";
		// }
		// if ($this->uri->segment(3) == 2){
		// 	$data['pesan'] = "Maaf Kode Random Anda Salah Harap Isi Dengan Benar !" ;
		// }

		// $data['error'] = $this->uri->segment(3) == 3;
		$this->load->view('update/index',$data);
	}

	// function index() {

	// 	$this->load->model('pemilihan_model');
	// 	$this->load->model('daftar_user_model');

	// 	$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
	// 	$data['data_calon'] = $this->pemilihan_model->get_calon();
	// 	$data['statistik_suara'] = $this->pemilihan_model->get_statistiksuara();
 //        $data['hasil_pemilihan'] = $this->pemilihan_model->get_hasilpemilihan();
 //        $data['kerja'] = $this->daftar_user_model->get_video();

 //        $data['chart_hasilpemilihan'] = [
 //            'labels' => [], 'datasets' => [], 'pemenang' => []
 //        ];
 //        // $pemenang = [];
 //        $suara = 0;
 //        foreach ($data['hasil_pemilihan'] as $key => $value) {
 //            if ($suara < $value['suara']) { 
 //                $data['chart_hasilpemilihan']['pemenang'] = $value;
 //                $suara = $value['suara']; 
 //            }
 //            $data['chart_hasilpemilihan']['datasets'][$key] = $value['suara'];
 //            $data['chart_hasilpemilihan']['labels'][$key] = 'Paslon No.' .$value['id_seri'];
 //        }
	// 	// echo "<pre>";
 //        // print_r($data);
 //        // echo "</pre>";
	// 	$this->load->view('update/index_graphic',$data);
	// }

	function index() {

		$this->load->model('pemilihan_model');
		$this->load->model('daftar_user_model');

		$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
		$data['tahundisiapkan'] = $this->pemilihan_model->get_tahundisiapkan();

		$data['data_calon'] = $this->pemilihan_model->get_calon();
		$data['statistik_suara'] = $this->pemilihan_model->get_statistiksuara();
        $data['hasil_pemilihan'] = $this->pemilihan_model->get_hasilpemilihan();
        $data['kerja'] = $this->daftar_user_model->get_video();

        $data['chart_hasilpemilihan'] = [
            'labels' => [], 'datasets' => [], 'pemenang' => []
        ];
        // $pemenang = [];
        $suara = 0;
       	if ($data['tahundisiapkan'] != 0) {
        	$data['pesan'] = 0;
        	$this->load->view('pemilih/css');
        			$this->load->view('pemilih/finis', $data);
        	$this->load->view('pemilih/js');
        }
        elseif (!$data['tahundipilih']) {
        	$data['pesan'] = "<h3>Maaf Tidak ada Pemilihan untuk saat ini</h3>";
  
        		// foreach ($tahundisiapkan as $key) {
        		// 	$nama_tahun = $key['tahun_pemilu'];
        		// }

        		// $data['pesan'] = "<h3>pemilih untuk tahun " . $nama_tahun . "</h3>";sdhddbs
        	$dtahun = $this->db->query("select max(id_tahun) as tahun_ from statistic")->result_array();
        	$data_tahun = $dtahun[0]['tahun_'];

        	$dp = $this->db->query("SELECT max(statistic_pemilih),id_datacalon FROM statistic where id_tahun = '$data_tahun ' ")->result_array();
        	foreach ($dp as $a) {
        		$id_calon = $a['id_datacalon'];
        		// echo $id_calon;
        	}
//ngambbil id_user ternyaya 
        	$data['dpresen'] = $dp;

        	$query = "select nama, nama_wakil, kelas, kelas_wakil  from data_pribadi where id_user = '$id_calon' ";

        	$data['listPemenang'] = $this->db->query($query)->result_array();

        	$data['selesai'] = $this->pemilihan_model->get_tahunselesai();

        	$this->load->view('pemilih/css');
        			$this->load->view('pemilih/finis', $data);
        	$this->load->view('pemilih/js');
        } 
        	else {
        	foreach ($data['hasil_pemilihan'] as $key => $value) {
	            if ($suara < $value['suara']) { 
	                $data['chart_hasilpemilihan']['pemenang'] = $value;
	                $suara = $value['suara']; 
	            }
	            $data['chart_hasilpemilihan']['datasets'][$key] = $value['suara'];
	            $data['chart_hasilpemilihan']['labels'][$key] = 'Paslon No.' .$value['id_seri'];
	        }
			// echo "<pre>";
	        // print_r($data);
	        // echo "</pre>";
			 $this->load->view('update/index_graphic',$data);
        }
       
	}

	function indexnew() {
		redirect('/');
		$this->load->model('pemilihan_model');
		$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
		$data['data_calon'] = $this->pemilihan_model->get_calon();
		$data['statistik_suara'] = $this->pemilihan_model->get_statistiksuara();
		echo "<pre>";
        // print_r($data);
        echo "</pre>";
		$this->load->view('update/index_',$data);
	}

	function pilih() {
		// print_r($_POST); exit();

		$this->load->model('pemilih_model');

		$data['list'] = $this->pemilih_model->foto();
		
		$data['pesan'] = null;
		if ($this->uri->segment(3) == 1) {//semua menjadi not array
			$data['pesan'] = "Maaf Kode Random Anda sudah terpakai !";
		}
		if ($this->uri->segment(3) == 2){
			$data['pesan'] = "Maaf Kode Random Anda Salah Harap Isi Dengan Benar !" ;
		}
		$data['error'] = $this->uri->segment(3) == 3;
		$this->load->view('pemilih/css');
		$this->load->view('pemilih/pilih_calon',$data);
		$this->load->view('pemilih/js');
	}
	function proses() {
		// print_r($_POST); exit();
		$this->load->model('proses_model');
		$this->load->model('pemilihan_model');

		$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
		if(!$data['tahundipilih']) {
			$this->session->set_flashdata('error', 'Pemilihan telah berakhir dan kotak suara telah ditutup.');
			redirect('/');
		}
		// $this->proses_model->pilih_calon($pilih, $kode); 
		// $this->form_validation->set_rules('pil_calon', 'pil_calon', 'required');

		// if (isset($_POST['kirim'])) {
				
		// $this->form_validation->set_rules('pil_calon', 'Pil_calon', 'required');
		// $this->form_validation->set_rules('pil_calon', 'Pil_calon', 'required');

		// if($this->form_validation->run() == false){
			// redirect('pemilih/index/' . 3);
			// $this->session->set_flashdata('error', '');
		// }else {
			$pilih =  $_POST['pil_calon'];
		    $kode =  $_POST['kode'];
		    // echo $pilih;
		    // exit();
			// $data = $this->proses_model->pilih_calon($pilih, $kode);
			$this->proses_model->pilih_calon($pilih, $kode); 

			redirect('/pemilih/index/');
		// }
			    
			// }
	}

	function pesan() {
		$this->load->view('pemilih/css');
		$this->load->view('pemilih/pesan_selamat');
		$this->load->view('pemilih/js');
	}
	// function baru()
	// {
	// 	$this->load->model('pemilihan_model');
	// 	$this->load->model('pemilih_model');

	// 	$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
	// 	$data['data_calon'] = $this->pemilihan_model->get_calon();
	// 	$data['aktif'] = $this->pemilih_model->pemenang();
	// 	$data['list'] = $this->pemilih_model->data();
	// 	$data['tahun'] = $this->pemilih_model->tahun_calon();
	// 	$data['tahun_depan'] = $this->pemilih_model->tahun_mendatang();

	// 	echo "<pre>";
 //        // print_r($data);
 //        echo "</pre>";
       
	// 	$data['list'] = $this->pemilih_model->foto();
	// 	$data['pesan'] = null;
	// 	if ($this->uri->segment(3) == 1) {//semua menjadi not array
	// 		$data['pesan'] = "Maaf Kode Random Anda sudah terpakai !";
	// 	}
	// 	if ($this->uri->segment(3) == 2){
	// 		$data['pesan'] = "Maaf Kode Random Anda Salah Harap Isi Dengan Benar !" ;
	// 	}

	// 	$data['error'] = $this->uri->segment(3) == 3;
	// 	$this->load->view('update/index_test',$data);
	// }
	function pemenang()
	{
		$this->load->model("info_data_model");
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();

		$data['list']= $this->info_data_model->info();

		$data['kode'] = $this->db->get("kode_random")->result_array();
		$data['jml'] = $this->info_data_model->jml_calon();
		
		$this->load->model('tahun_model');
		$data['tahun'] = $this->tahun_model->lihat_tahun();

			$this->load->view('pemilih/statistic', $data);
	}

}