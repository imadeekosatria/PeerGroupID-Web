<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username','password','nama','email'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    //Code goes here!
}