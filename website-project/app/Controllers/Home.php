<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KegiatanModel;

class Home extends BaseController
{
    //Global Constructor
    protected $get;
    protected $getkegiatan;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->getkegiatan = new KegiatanModel();
    }

    //Index
    public function index()
    {
        $selfdev = $this->get->getnewartikel('self development');
        $karir = $this->get->getnewartikel('karir');
        $jurusan = $this->get->getnewartikel('jurusan');
        $kegiatan = $this->getkegiatan->getdatakegiatan();
        $data = [
            'title' => 'Peer Group ID',
            'selfdev' => $selfdev,
            'karir' => $karir,
            'jurusan' => $jurusan,
            'kegiatan' => $kegiatan
        ];
        return view('Apps/index', $data);
    }

    //Detail Artikel
    public function detart($id){
        $list = $this->get->getartikel($id);
        $data = [
            'title' => 'Detail Artikel',
            'artikel' => $list
        ];
        return view('Apps/detail artikel', $data);
    }

    //Halaman Artikel
    public function artikel($e){
        if ($e == 'self') {
            $getartikel = $this->get->getdataartikel('self development');
            $data = [
                'title' => 'Artikel',
                'kategori' => 'Self Development',
                'artikel' => $getartikel
            ];
        }elseif ($e == 'jurusan') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel',
                'kategori' => 'Jurusan',
                'artikel' => $getartikel
            ];
        }elseif ($e == 'karir') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel',
                'kategori' => 'Karir',
                'artikel' => $getartikel
            ];
        }
        
        return view('Apps/artikel', $data);
    }

    //About
    public function about(){
        $data = [
            'title' => 'Siapa Kita ?'
        ];

        return view('Apps/about', $data);
    }
}
