<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan_model extends CI_Model {
    function get_tahundipilih() {
        $this->db->select('*');
        $this->db->where('status', 1);
        // $this->db->where('dipilih', 1);
        $query = $this->db->get('tahun')->result_array();
        if (count($query)) {
            return $query[0];
        }
        return 0;
    }
    function get_tahundisiapkan() {
        $this->db->select('*');
        $this->db->where('status', 2);
        // $this->db->where('dipilih', 1);
        $query = $this->db->get('tahun')->result_array();
        if (count($query)) {
            return $query[0];
        }
        return 0;
    }

    function get_tahunselesai() {
        $query = "select MAX(tahun_pemilu) as tahun_selesai from tahun where status = 0 ";
        // $query = "select * from tahun where tahun_pemilu = 'select MAX(tahun_pemilu) from tahun' and status = 0 ";

       $data =  $this->db->query($query)->result_array();

       return $data;
    }

    function get_calon() {
        $tahundipilih = $this->get_tahundipilih();
        // print_r($tahundipilih);
        // exit();
        if ($tahundipilih) {
            $this->db->select('user.id_user,user.level,user.name,data_caketos_cawalos.*,data_pribadi.*');
            $this->db->where('user.id_tahun', $tahundipilih['id_tahun']);
            $this->db->where('user.level', 'calon');
            $this->db->join('data_caketos_cawalos', 'user.id_user = data_caketos_cawalos.id_user', 'left');
            $this->db->join('data_pribadi', 'user.id_user = data_pribadi.id_user', 'left');
            $query = $this->db->get('user')->result_array();
            return $query;
            // print_r($query);
            // exit();
        }
        return 0;
        
    }

    function get_hasilpemilihan() {
        $tahundipilih = $this->get_tahundipilih();
        if ($tahundipilih) {
            $this->db->select('count(*) suara,pemilih.id_user,data_pribadi.id_seri,data_pribadi.nama,data_pribadi.nama_wakil,data_pribadi.foto_paslon');
            $this->db->join('data_pribadi', 'data_pribadi.id_user = pemilih.id_user', 'left');
            // $this->db->select('count(*) suara,pemilih.id_user');
            // $this->db->join('data_pribadi', 'data_pribadi.id_user = pemilih.id_user', 'left');
            $this->db->group_by("pemilih.id_user");
            // $this->db->where('id_tahun', $tahundipilih['id_tahun']);
            $query = $this->db->get('pemilih')->result_array();
            return $query;
        }
        return 0;
    }

    function get_statistiksuara() {
        $res = array(
            'total_suara' => 0,
            'total_suara_belumdigunakan' => 0,
            'total_suara_digunakan' => 0
        );
        $tahundipilih = $this->get_tahundipilih();
        $this->db->select('count(*) suara');
        $this->db->where('id_tahun', $tahundipilih['id_tahun']);
        $query = $this->db->get('kode_random')->result_array();
        $res['total_suara'] = $query[0]['suara'];
        $this->db->select('count(*) suara');
        $this->db->where('id_tahun', $tahundipilih['id_tahun']);
        $query = $this->db->get('pemilih')->result_array();
        $res['total_suara_digunakan'] = $query[0]['suara'];
        $res['total_suara_belumdigunakan'] = $res['total_suara'] - $res['total_suara_digunakan'];
        return $res;
    }

    public function tahun_mendatang()
        {
            $this->db->select('tahun_pemilu');
            $this->db->from('tahun');
            $this->db->where('status', 2);
            $data =  $this->db->get()->result_array();
            if ($data) {
                return $data[0];
            }
            return 0;
        }
}