<?php namespace App\Controllers;
use App\Models\{KelasModel, GuruModel, SiswaAktifModel, SekolahModel, UserModel};

class Login extends BaseController

{
	protected $KelasModel;
	protected $GuruModel;
	protected $SiswaAktifModel;
	protected $SekolahModel;
	protected $UserModel;

	public function __construct(){
		$this->KelasModel = new KelasModel();
		$this->GuruModel = new GuruModel();
		$this->SiswaAktifModel = new SiswaAktifModel();
		$this->SekolahModel = new SekolahModel();
		$this->UserModel = new UserModel();
		helper('form');
	}


	public function index()
	{
		$data=[
			'title'=>'Dashboard',
			'isi'=> 'v_login',
			'siswa' => $this->SiswaAktifModel->getSiswaaktif(),
			'guru' => $this->GuruModel->getGuru(),
			'kelas' => $this->KelasModel->getKelas(),
		];

		echo view ('v_login',$data);
	}

    public function auth(){
        // $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $this->UserModel->getUserBy($username);
        // print_r($dataUser);
        if($dataUser){
            if($password == $dataUser->password){
                session()->set([
                    'username' => $dataUser->username,
                    'nama' => $dataUser->nama,
                    'role' => $dataUser->role,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }

        // print_r($dataUser);
    }

    public function auth_wali(){

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $this->KelasModel->getKelasBy($username);
        // print_r($dataUser);
        // exit();
        
        if($dataUser){
            if($password == $dataUser->password){
                session()->set([
                    'username' => $dataUser->slug,
                    'nama' => $dataUser->slug,
                    'role' => $dataUser->role,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
	//--------------------------------------------------------------------

}
