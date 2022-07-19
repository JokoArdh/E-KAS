<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
       
        if($this->session->userdata('level') == 'admin'){
        
            $data['title'] = 'Dasboard Admin';

            $masuk = $this->db->query("SELECT SUM(pemasukan) AS total FROM catatan")->row()->total;
            $keluar = $this->db->query("SELECT SUM(pengeluaran) AS total FROM catatan")->row()->total;
            $data['total_masuk'] = $masuk;
            $data['total_keluar'] = $keluar;

        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('home/index', $data);
        $this->load->view('home/footer');
        }else{
            redirect('auth');
        }   
    }
}