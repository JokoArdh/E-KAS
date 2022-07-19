<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kredit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_rekap');
    }

    public function index(){
       
        $data['kredit'] = $this->M_rekap->Kredit()->result();
        $keluar = $this->db->query("SELECT SUM(pengeluaran) as total FROM catatan")->row()->total;
        $data['total_keluar'] = $keluar;
        

        $data['title'] = 'Kas Keluar';
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('home/index3', $data);
        $this->load->view('home/footer'); 
    }

    public function tambah_kre(){

        $tgl     = $this->input->post('tanggal');
        $ket     = $this->input->post('keterangan');
        $jml     = $this->input->post('pengeluaran');
        $jenis   = $this->input->post('jenis');

        $data = [
            'tanggal'     => $tgl,
            'keterangan'  => $ket,
            'pengeluaran' => $jml,
            'jenis'       => $jenis
        ];

        $this->M_rekap->tambah_deb($data, 'catatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan !</div>');
        redirect('kredit');

    }

    public function edit($id){
        $where = array('id_note' =>$id);
        $data['kredit'] = $this->M_rekap->edit_deb($where, 'catatan')->result();

        $data['title'] = "Update Pengeluaran";
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/topbar');
        $this->load->view('update/edit2', $data);
        $this->load->view('home/footer'); 
        
   }
   public function update(){
    $id      = $this->input->post('id_note');
    $tgl      = $this->input->post('tanggal');
    $ket      = $this->input->post('keterangan');
    $jml      = $this->input->post('pengeluaran');

    $data = [
        'tanggal'     => $tgl,
        'keterangan'  => $ket,
        'pengeluaran'   => $jml
    ];
     $where = array('id_note' =>$id);
     $this->M_rekap->update_deb($where, $data, 'catatan');
     $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Data Berhasil diupdate !</div>');
     redirect('kredit');
   }

   public function hapus($id){
    $where = array('id_note' => $id);
    $this->M_rekap->hapus_data($where, 'catatan');
    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Berhasil dihapus !</div>');
    redirect('kredit');
   }

}