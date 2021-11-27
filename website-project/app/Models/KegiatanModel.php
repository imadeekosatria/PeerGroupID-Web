<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $allowedFields = ['judul', 'slug','penulis', 'deskripsi', 'isi', 'cover', 'sumber_cover', 'time'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    //Get Kegiatan for index
    public function getdatakegiatan(){
        $query = $this->db->query("SELECT * FROM kegiatan Limit 4");
        return $query;
    }
    
    //get admin kegiatan
    public function getadminkegiatan(){
        $query = $this->db->query("SELECT * FROM kegiatan");
        return $query;
    }

    //Get detail kegiatan
    public function getkegiatan($slug) {
        $query = $this->db->query("SELECT * FROM kegiatan Where slug = '$slug'");
        return $query;
    }
}