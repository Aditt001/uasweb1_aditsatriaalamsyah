<?php

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    


public function getALLMahasiswa()
{
    $this->db->query('SELECT * FROM '. $this->table);
    return $this->db->resultSet();
}

public function getMahasiswaById($id)
{
$this->db->query("SELECT * FROM mahasiswa WHERE id = :id");
$this->db->bind('id', $id);
return $this->db->single();

}
}