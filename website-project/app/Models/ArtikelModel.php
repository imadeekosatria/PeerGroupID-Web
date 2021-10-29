<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['judul', 'penulis', 'text', 'cover', 'sumber_cover'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    //Get data artikel
    public function getartikel(){
        $query = $this->db->query("SELECT * FROM artikel Where id = 1");
        return $query;
    }
}