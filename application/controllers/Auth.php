<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('M_login');
  }

  public function index(){

    //membuat rules validasi form inputan
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    //ketika validasi salah maka akan tampil awal
    if($this->form_validation->run() == false){
      $data['title'] = "Login Page";
      $this->load->view('auth/login_header', $data);
      $this->load->view('auth/login');
      $this->load->view('auth/login_footer');
    }else{

      //ketika validasi benar maka aksi berikutnya
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $this->load->model('M_login');
      $hasil = $this->M_login->getData($username, $password);

      if($hasil->num_rows() > 0){

        foreach($hasil->result() as $hsl){
          $data_ses['username'] = $hsl->username;
          $data_ses['name'] = $hsl->name;
          $data_ses['email'] = $hsl->email;
          $data_ses['level'] = $hsl->level;

          $this->session->set_userdata($data_ses);
        }
      }

      //jika login berhasil kemudian tangkap siapak yag login spserti di bawah ini admin
      if($data_ses['level'] == 'admin'){
        redirect('dashboard');
      }else{
        //ketika salah maka tampilkan session salah  lalu balikkan ke halam loggin
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry your username or password is wrong</div>');
         redirect('auth');
       }
       
    }

  }

  //fungsi untuk logout
  public function logout(){

    $this->session->unset_userdata('admin');
    $this->session->unset_userdata('level');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Keluar</div>');
     redirect('auth');

  }



}