<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}
	function index() {
		$this->load->model('pemilihan_model');
		$data['tahundipilih'] = $this->pemilihan_model->get_tahundipilih();
		$data['data_calon'] = $this->pemilihan_model->get_calon();
		$data['statistik_suara'] = $this->pemilihan_model->get_statistiksuara();
        $data['hasil_pemilihan'] = $this->pemilihan_model->get_hasilpemilihan();

        $data['chart_hasilpemilihan'] = [
            'labels' => [], 'datasets' => [], 'pemenang' => []
        ];
        // $pemenang = [];
        $suara = 0;
        foreach ($data['hasil_pemilihan'] as $key => $value) {
            if ($suara < $value['suara']) {
                $data['chart_hasilpemilihan']['pemenang'] = $value;
                $suara = $value['suara'];
            }
            $data['chart_hasilpemilihan']['datasets'][$key] = $value['suara'];
            $data['chart_hasilpemilihan']['labels'][$key] = 'Paslon ' .$value['id_seri'];
        }
		echo "<pre>";
        // print_r($data);
        echo "</pre>";
		$this->load->view('update/index_test',$data);
	}
}