<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debet extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_rekap');
    }

    public function index(){
       
        $data['debet'] = $this->M_rekap->debet()->result();
        $masuk = $this->db->query("SELECT SUM(pemasukan) AS total FROM catatan")->row()->total;
        $data['total_masuk'] = $masuk;
        

        $data['title'] = 'Kas Masuk';
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('home/index2', $data);
        $this->load->view('home/footer'); 
    }

    public function tambah(){

        $tgl     = $this->input->post('tanggal');
        $ket     = $this->input->post('keterangan');
        $jml     = $this->input->post('pemasukan');
        $jenis   = $this->input->post('jenis');

        $data = [
            'tanggal'     => $tgl,
            'keterangan'  => $ket,
            'pemasukan'   => $jml,
            'jenis'       => $jenis
        ];

        $this->M_rekap->tambah_deb($data, 'catatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan !</div>');
        redirect('debet');
    }

   public function edit($id){
        $where = array('id_note' =>$id);
        $data['debet'] = $this->M_rekap->edit_deb($where, 'catatan')->result();

        $data['title'] = "Update Pemasukan";
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('update/edit1', $data);
        $this->load->view('home/footer'); 
        
   }

   public function update(){
    $id      = $this->input->post('id_note');
    $tgl      = $this->input->post('tanggal');
    $ket      = $this->input->post('keterangan');
    $jml      = $this->input->post('pemasukan');

    $data = [
        'tanggal'     => $tgl,
        'keterangan'  => $ket,
        'pemasukan'   => $jml
    ];
     $where = array('id_note' =>$id);
     $this->M_rekap->update_deb($where, $data, 'catatan');
     $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Data Berhasil diupdate !</div>');
     redirect('debet');
   }

   public function hapus($id){
    $where = array('id_note' => $id);
    $this->M_rekap->hapus_data($where, 'catatan');
    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Berhasil dihapus !</div>');
    redirect('debet');
   }
}