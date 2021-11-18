<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['judul', 'kategori','penulis', 'deskripsi', 'text', 'cover', 'sumber_cover', 'created_at'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    //Get data artikel
    public function getartikel($id) {
        $query = $this->db->query("SELECT * FROM artikel Where id = $id");
        return $query;
    }

    //Get Artikel
    public function getdataartikel($kategori){
        $query = $this->db->query("SELECT * FROM artikel WHERE kategori = '$kategori'");
        return $query;
    }

    public function getnewartikel($kategori){
        $query = $this->db->query("SELECT * FROM artikel WHERE kategori = '$kategori' ORDER BY created_at DESC Limit 1;");
        return $query;
    }

    public function getadminartikel(){
        $query = $this->db->query("SELECT * FROM artikel ORDER BY created_at DESC");
        return $query;
    }

    public function getadminkegiatan(){
        $query = $this->db->query("SELECT * FROM kegiatan");
        return $query;
    }
}