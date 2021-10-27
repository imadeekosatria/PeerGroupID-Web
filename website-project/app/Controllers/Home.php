<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Apps/index');
    }

    public function detart(){
        return view('Apps/detail artikel');
    }
}
