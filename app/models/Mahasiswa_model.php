<?php

class Mahasiswa_model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT*FROM MAHASISWA');
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT*FROM MAHASISWA WHERE ID=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO MAHASISWA
                    VALUES
                    ('', :nama, :usia, :spesialisasi)";
        $this->db->query($query);
        $this->db->bind('nama', $data['name']);
        $this->db->bind('usia', $data['age']);
        $this->db->bind('spesialisasi', $data['job']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
