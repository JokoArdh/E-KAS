<!-- <?php 

class M_rekap extends CI_Model{

    //Model ini berfungsi untuk menampiulkan data dari database
    public function show_data(){
        return $this->db->get('catatan');
    }

    //model ini diapakai oleh data yang ada di menu Debet dengan menggunakan query sesuai di bawah
    public function debet(){

        // $kabeh = "SELECT tanggal, keterangan, pemasukan, jenis FROM catatan WHERE jenis='pemasukan'";
        // $query = $this->db->query($kabeh);
        // return $query;

        $this->db->select('id_note, tanggal, keterangan, pemasukan, jenis');
         $this->db->from('catatan');
         $this->db->where('jenis', 'pemasukan');
         $query = $this->db->get();
         return $query;
    }

    //perhatikan model debet dan kredit menggunakan 2 query yang berbeda dengan itu menunjukan
    //pemakaian atau pemanggilan query bisa dilakukan dengan 2 model tersebut 
    //tergantung selera mau pake query yang sesuai oop di model debet atau pakai query builder di model kredit

    //model ini dipakai untuk menampilkan data kredit sesuai query di bawah 
    public function kredit(){
        $kabeh = "SELECT id_note, tanggal, keterangan, pengeluaran, jenis FROM catatan WHERE jenis='pengeluaran'";
        $query = $this->db->query($kabeh);
        return $query;
    }

    //model ini digunakan untuk melakukan insert  ke query
    public function tambah_deb($data, $table){
        $this->db->insert($table, $data);
    }

    //fungsi ini digunakan untuk menganbil id yang terdapat pada sebuah data
   public function edit_deb($where, $table){
        return $this->db->get_where($table, $where);
   }

   //model ini digunakan untukl melakukan aksi update atau proses pengupdatan 
   public function update_deb($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
   }

   //model ini digunakan untuk menghapus data
   public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
   }
}


?> -->