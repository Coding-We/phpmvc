<?php 

class Karyawan_model {

    private $table = 'karyawan';
    private $db;
    public function __construct() {
        $this->db = new Database;

    }

        public function getAllKaryawan() {

            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
    }

    public function getKaryawanById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKaryawan($data) {
        $query = "INSERT INTO karyawan 
                VALUES
            ('', :nama, :jabatan, :umur)";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jabatan', $data['jabatan']);
            $this->db->bind('umur', $data['umur']);
            $this->db->execute();
            return $this->db->rowCount();
    }

    public function hapusDataKaryawan($id) {
        $query = "DELETE FROM karyawan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataKaryawan($data) {
        $query = "UPDATE karyawan SET
                nama = :nama,
                jabatan = :jabatan,
                umur = :umur
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    

}