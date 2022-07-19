<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_rekap');
    }

    //fungsi ini digunakan untuk menampilkan hasil rekapitulasi kas
    public function index(){
       
        $data['rekap'] = $this->M_rekap->show_data()->result();

        $masuk = $this->db->query("SELECT SUM(pemasukan) AS total FROM catatan")->row()->total;
        $keluar = $this->db->query("SELECT SUM(pengeluaran) AS total FROM catatan")->row()->total;
        $data['total_masuk'] = $masuk;
        $data['total_keluar'] = $keluar;

        $data['title'] = 'Rekapitulasi';
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('home/index1', $data);
        $this->load->view('home/footer'); 
    }
}