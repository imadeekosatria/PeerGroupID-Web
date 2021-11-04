<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Peer Group ID'
        ];
        return view('Apps/index', $data);
    }
    protected $get;
    public function __construct(){
        $this->get = new ArtikelModel();
    }
    public function detart(){
        $list = $this->get->getartikel();
        $data = [
            'title' => 'Detail Artikel',
            'artikel' => $list
        ];
        return view('Apps/detail artikel', $data);
    }

    public function artikel(){
        $data = [
            'title' => 'Artikel Karir'
        ];
        return view('Apps/artikel', $data);
    }

    public function about(){
        $data = [
            'title' => 'Siapa Kita ?'
        ];

        return view('Apps/about', $data);
    }
}
