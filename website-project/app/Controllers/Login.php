<?php

namespace App\Controllers;
 
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        return view('Apps/login');
    }

    public function process()
    {
        $users = new LoginModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $dataUser = $users->where(['username' => $username])->first();

        if ($dataUser) {
            if ($password === $dataUser->password) {
                $session = session();
                $session->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->nama,
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/artikel-admin');
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function artikel(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Artikel Admin'
        ];

        return view('Apps/artikel_admin', $data);
    }

    public function kegiatan(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Kegiatan Admin'
        ];
        return view('Apps/kegiatan_admin', $data);
    }

    public function profile(){
        $model = new LoginModel();
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $user = $session->username;
        $dataUser = $model->where(['username' => $user])->first();
        $data = [
            'title' => 'Profile',
            'username' => $dataUser->username,
            'password' => $dataUser->password,
            'nama' => $dataUser->nama,
            'id' => $dataUser->id_user 
        ];

        return view('Apps/profil_admin', $data);
    }


    public function update_profile($id){
        $model = new LoginModel();
        
    }
}
