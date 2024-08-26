<?php

class Lang_Model
{

    private $table = 'product';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function insertData($data)
    {
        $query = "INSERT INTO product VALUES(null, :bahasa, :tahun, :author, :tipe)";

        $this->db->query($query);

        $this->db->bind('bahasa', $data['bahasa']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateData($data)
    {
        $query = "UPDATE product SET
             bahasa = :bahasa,
             tahun = :tahun, 
             author = :author, 
             tipe = :tipe 
             WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('bahasa', $data['bahasa']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function deleteData($id)
    {
        $query = "DELETE FROM product WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getSearchData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM product WHERE bahasa LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}