<?php 

class M_login extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    
    //model untuk menangkap aksi login
    public function getData($username, $password){

        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query;
    }

}