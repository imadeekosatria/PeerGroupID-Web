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
            'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu',
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
        $deskripsi = $this->get->getmetadeskripsiartikel($id);
        foreach ($deskripsi->getResult() as $meta) {
            $desk = $meta->deskripsi;
        }
        $data = [
            'title' => 'Detail Artikel',
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
                'title' => 'Artikel',
                'kategori' => 'Self Development',
                'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu',
                'artikel' => $getartikel
            ];
        }elseif ($e == 'jurusan') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel',
                'kategori' => 'Jurusan',
                'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu',
                'artikel' => $getartikel
            ];
        }elseif ($e == 'karir') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel',
                'kategori' => 'Karir',
                'artikel' => $getartikel,
                'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu'
            ];
        }
        
        return view('Apps/artikel', $data);
    }

    //About
    public function about(){
        $data = [
            'title' => 'Siapa Kita ?',
            'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu'
        ];

        return view('Apps/about', $data);
    }
}
