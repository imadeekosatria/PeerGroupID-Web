<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KegiatanModel;

class Home extends BaseController
{
    //Global Constructor
    protected $get;
    protected $getkegiatan;
    protected $deskripsi;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->getkegiatan = new KegiatanModel();
        $this->deskripsi = 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu';
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
            'deskripsi' => $this->deskripsi,
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
        // $deskripsi = $this->get->getmetadeskripsiartikel($id);
        foreach ($list->getResult() as $meta) {
            $desk = $meta->deskripsi;
            $title = $meta->judul;
        }
        $data = [
            'title' => $title,
            'deskripsi' => $desk,
            'artikel' => $list
        ];
        return view('Apps/detail artikel', $data);
    }

    //Halaman Artikel
    public function artikel($e){
        if ($e == 'self') {
            $getartikel = $this->get->getdataartikel('self development');
            $data = [
                'title' => 'Artikel Self Development',
                'kategori' => 'Self Development',
                'deskripsi' => $this->deskripsi,
                'artikel' => $getartikel
            ];
        }elseif ($e == 'jurusan') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel Jurusan',
                'kategori' => 'Jurusan',
                'deskripsi' => $this->deskripsi,
                'artikel' => $getartikel
            ];
        }elseif ($e == 'karir') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel Karir',
                'kategori' => 'Karir',
                'artikel' => $getartikel,
                'deskripsi' => $this->deskripsi
            ];
        }
        
        return view('Apps/artikel', $data);
    }

    //About
    public function about(){
        $data = [
            'title' => 'Siapa Kita ?',
            'deskripsi' => $this->deskripsi
        ];

        return view('Apps/about', $data);
    }
}
