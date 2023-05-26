<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {
	function gallery()
	{
		parent::Controller();
		$this->load->model("galler_model", "", true);
	}function index()
	{
		$data['from_action']= base_url("gallery/tambah");
		$this->load->view("upload", $data);
	}function tambah()
	{
		$ada_foto = $this->input->post('foto_1');
		$jml_foto = $this->input->post('jml_foto');

		if ((isset($jml_foto) && $jml_foto < 0) && $isset($ada_foto)){
			$cek_upload = false;

			for ($i=1; $i <= $jml_foto ; $i++) { 
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2000';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if (!$this->upload->do_upload('foto_'.$i)) {
					$cek_upload = false;
					break;
				}else {
					$data = array('upload_data' => $this->upload->data());
					$nama[$i] = $data['upload_data']['file_name'];

					$cek_upload = true;
				}
			}
			if ($cek_upload == true) {
				for ($i=1; $i <= $jml_foto ; $i++) { 
					$rec = array(
						'foto' => $nama['$i'],
						'keterangan' => $this->input->post['keterangan_'.$i],
					);
					$this->product_model->tambah_foto($rec);
				}
				$this->session->set_flashdata('message', 'Foto Baru Tersimpan');
					redirect('gallery');
			}else {
				for ($j=1; $j <= $jml_foto ; $j++) {  
					if (file_exists('public/foto produk/'.$nama[$j])) {
						unlink('public/foto produk/'.$nama['$j']);
						$this->session->set_flashdata('message', '<font color="red">Upload Foto Gagal</font><br/>');
						redirect('gallery');
					}else {
						$this->session->set_flashdata('message', 'Data Tidak Tersimpan');
						redirect('gallery');
					}

				}
			}

		}
	}
}
