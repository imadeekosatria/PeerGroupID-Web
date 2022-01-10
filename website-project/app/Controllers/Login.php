<?php

namespace App\Controllers;
 
use App\Models\LoginModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;
class Login extends BaseController
{
    public function index()
    {
        $data = [
            'deskripsi' => 'Login Admin Peer Group ID'
        ];
        return view('Apps/new_login', $data);
    }
    
    //Global Constructor
    protected $get;
    protected $user;
    protected $kegiatan;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->user = new LoginModel();
        $this->kegiatan = new KegiatanModel();
    }
    
    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $dataUser = $this->user->where(['username' => $username])->first();

        if ($dataUser) {
            if ($password === $dataUser->password) {
                $session = session();
                $session->set([
                    'username' => $dataUser->username,
                    'panggilan' => $dataUser->panggilan,
                    'foto' => $dataUser->foto,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin-panel'));
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
        return redirect()->to(base_url('login'));
    }


    //Profil Admin
    public function profile(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $user = $session->username;
        $dataUser = $this->user->where(['username' => $user])->first();
        $data = [
            'title' => 'Profile',
            'username' => $dataUser->username,
            'password' => $dataUser->password,
            'nama' => $dataUser->nama,
            'id' => $dataUser->id_user,
            'gender' => $dataUser->gender,
            'foto' => $dataUser->foto 
        ];

        return view('Apps/new_profile', $data);
    }


    public function update_profile($id){
        //Ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // dd($fileFoto);

        //Check gambar apakah di upload
        if ($fileFoto->getError() == 4) {
            $profile = 'default.png';
        }else {
            //Pindah gambar
            $fileFoto->move('assets/images/profile');
            //Ambil nama gambar
            $profile = $fileFoto->getName();
        }
        
        //Slug if needed
        // $slug = url_title($this->request->getVar('title'), '-', true);
        //Simpan
        // dd($this->request->getVar());
		$this->user->save([
            'id_user' => $id,
			'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('name'),
            'gender' => $this->request->getVar('gender'),
            'foto' => $profile
		]);
        $session = session();
        $session->set([
            'username' => $this->request->getVar('username'),
            'name' => $this->request->getVar('name'),
            'foto' => $profile
        ]);
        return redirect()->to('profile');
    }

    //Management Konten
    public function admin(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $allpost = $this->get->getallpost();
        $getkegiatan = $this->kegiatan->getadminkegiatan();
        $data = [
            'title' => 'Admin Panel',
            'allpost' => $allpost,
            'kegiatan' => $getkegiatan
        ];
        return view('Apps/admin_panel', $data);
    }

    
    //Artikel
    public function artikel(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $artikel = $this->get->getadminartikel();
        $data = [
            'title' => 'Artikel',
            'artikel' => $artikel
        ];

        return view('Apps/new_admin_artikel', $data);
    }

    public function hapus_artikel($id){
        $this->get->delete($id);
		    return redirect()->back();
    }

    public function tambah_data(){
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
        // if (!$this->validate([
        //     'title' => [
        //         'rules'=>'required|is_unique[artikel.judul]',
        //         'error' =>[
        //             'is_unique' => '{field} Judul sudah ada'
        //         ]
        //     ],
        //     'cover' => [
        //         'rules' => 'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/svg]',
        //         'error' => [
                    
        //             'max_size' => 'Upload maksimal 1 MB',
        //             'is_image' => 'Yang anda upload bukan gambar',
        //             'mime_in' => 'Yang anda upload bukan gambar'
        //         ]
        //     ]
            

            
        // ])) {
        //     $validation = \Config\Services::validation();
        //     // return redirect()->to('/tambah-data')->withInput()->with('validation',$validation);
        //     return redirect()->to('/tambah-data')->withInput();
        // }
		
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
        $slug = url_title($this->request->getVar('title'), '-', true);
        //Simpan
		$this->get->save([
			'judul' => $this->request->getVar('title'),
            'slug' => $slug,
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

    //Kegiatan
    public function kegiatan(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $getkegiatan = $this->kegiatan->getadminkegiatan();
        $data = [
            'title' => 'Kegiatan',
            'kegiatan' => $getkegiatan
        ];
        return view('Apps/kegiatan_admin', $data);
    }

    //Ajax request
    public function ajax($date){
       
        $ajax = $this->get->getpostajax($date);
        $ajax2 = $this->kegiatan->getkegiatanwhere($date);
        $data = [
            'allpost' => $ajax,
            'kegiatan' => $ajax2
        ];
        
        return view('Apps/ajax', $data);
    }
    
}
