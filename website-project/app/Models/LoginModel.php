<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['username','password'];

    public function login($data){
        $query = $this->db->query("SELECT * FROM user Where username = '$data'");
        return $query;
    }
}