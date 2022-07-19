<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    //fungsi ini menampilkan profile dari pengarang atau user dalam database
    public function index(){
        
        $data['title'] = 'Profile';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('home/profile', $data);
        $this->load->view('home/footer'); 
    

    }

}