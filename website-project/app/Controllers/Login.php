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
                    'foto' => $dataUser->foto,
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
            'id' => $dataUser->id_user,
            'gender' => $dataUser->gender,
            'foto' => $dataUser->foto 
        ];

        return view('Apps/profil_admin', $data);
    }


    public function update_profile($id){
        $model = new LoginModel();
        
    }

    //Management Konten
    //Global Constructor Artikel
    protected $get;
    protected $user;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->user = new LoginModel();
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
        $artikel = $this->get->getadminkegiatan();
        $data = [
            'title' => 'Kegiatan Admin',
            'artikel' => $artikel
        ];
        return view('Apps/kegiatan_admin', $data);
    }

    public function hapus_artikel($id){
        $this->get->delete($id);
		    return redirect()->back();
    }

    public function tambah_artikel(){
        $penulis = $this->user->penulis();
        $data = [
            'title' => 'Tambah Artikel',
            'penulis' => $penulis,
            'validation' => \Config\Services::validation()
        ];

        return view('Apps/form_artikel', $data);
    }

    public function simpan(){
        // dd($this->request->getVar());
        //Validation
        if (!$this->validate([
            'title' => [
                'rules'=>'required|is_unique[artikel.judul]',
                'error' =>[
                    'is_unique' => '{field} Judul sudah ada'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/svg]',
                'error' => [
                    
                    'max_size' => 'Upload maksimal 1 MB',
                    'is_image' => 'Yang anda upload bukan gambar',
                    'mime_in' => 'Yang anda upload bukan gambar'
                ]
            ]
            

            
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tambah-artikel')->withInput()->with('validation',$validation);
            // return redirect()->to('/tambah-artikel')->withInput();
        }
		
        //Ambil gambar
        $fileCover = $this->request->getFile('cover');
        // dd($fileCover);

        //Check gambar apakah di upload
        if ($fileCover->getError() == 4) {
            $coverName = 'default.svg';
        }else {
            //Pindah gambar
            $fileCover->move('assets/images/artikel');
            //Ambil nama gambar
            $coverName = $fileCover->getName();
        }
        
        //Slug if needed
        // $slug = url_title($this->request->getVar('title'), '-', true);

        //Simpan
		$this->get->save([
			'judul' => $this->request->getVar('title'),
            'cover' => $coverName,
            'sumber_cover' => $this->request->getVar('sumber_cover'),
            'deskripsi' => $this->request->getVar('deskripsi'),
			'penulis' => $this->request->getVar('penulis'),
			'kategori' => $this->request->getVar('kategori'),
            'text' => $this->request->getVar('content')
		]);
        return redirect()->to('artikel-admin');
	}

    public function edit_artikel($id) {
        $edit = $this->get->getartikel($id);
        
        $data = [
			'title' => 'Edit Artikel',
			'tampil' => $edit,
            
            'validation' => \Config\Services::validation()
		];

		return view('Apps/edit_form', $data);
    }
    
    public function update($id){
        //Ambil gambar
        $fileCover = $this->request->getFile('cover');
        // dd($fileCover);

        //Check gambar apakah di upload
        if ($fileCover->getError() == 4) {
            $coverName = 'default.svg';
        }else {
            //Pindah gambar
            $fileCover->move('assets/images/artikel');
            //Ambil nama gambar
            $coverName = $fileCover->getName();
        }
        $this->get->save([
            'id' => $id,
			'judul' => $this->request->getVar('title'),
            'cover' => $coverName,
            'sumber_cover' => $this->request->getVar('sumber_cover'),
            'deskripsi' => $this->request->getVar('deskripsi'),
			'kategori' => $this->request->getVar('kategori'),
            'text' => $this->request->getVar('content')
		]);
        return redirect()->to('artikel-admin');
    }
}
