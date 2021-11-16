<?php

namespace App\Controllers;
 
use App\Models\LoginModel;
use App\Models\ArtikelModel;
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

    //Management Konten
    //Global Constructor Artikel
    protected $get;
    public function __construct(){
        $this->get = new ArtikelModel();
    }
    public function artikel(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $artikel = $this->get->getadminartikel();
        $data = [
            'title' => 'Artikel Admin',
            'artikel' => $artikel
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

    public function hapus_artikel($id){
        $this->get->delete($id);
		    return redirect()->to('/artikel-admin');
    }

    public function tambah_artikel(){
        $data = [
            'title' => 'Tambah Artikel',
            'validation' => \Config\Services::validation()
        ];

        return view('Apps/form_artikel');
    }

    public function simpan(){
        //Validation
        if (!$this->validate([
            'judul' => 'required|is_unique[artikel.judul]',
            'kategori' => 'required',
            
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tambah-artikel')->withInput()->with('validation',$validation);
        }
		
        $kategori =$this->request->getVar('kategori');
		$this->list->save([
			'judul' => $this->request->getVar('judul'),
			'alat' => $this->request->getVar('alat'),
			'petunjuk' => $this->request->getVar('petunjuk'),
            'rating' => $this->request->getVar('rating'),
            'kategori' => $kategori,
            'cover' => 'undraw_under_construction_46pa.svg',
		]);
	}
    
}
