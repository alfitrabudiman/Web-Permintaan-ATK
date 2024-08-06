<?php
namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    // Method untuk menampilkan halaman login
    public function index()
    {
        return view('login/login');
    }

    // Method untuk autentikasi pengguna
    public function auth()
    {
        $session = session(); // Memulai sesi
        $model = new LoginModel(); // Membuat instance dari LoginModel
        $username = $this->request->getVar('username'); // Mendapatkan nilai 'username' dari request
        $password = $this->request->getVar('password'); // Mendapatkan nilai 'password' dari request
        $data = $model->where('username', $username)->first(); // Mencari data pengguna berdasarkan 'username'
        
        if ($data) {
            $pass = $data['password']; // Mendapatkan password dari data pengguna
            $verify_pass = password_verify($password, $pass); // Verifikasi password yang dimasukkan dengan hash password di database
            if ($verify_pass) {
                // Jika password benar, set data sesi
                $ses_data = [
                    'id_login'   => $data['id_login'],
                    'username'   => $data['username'],
                    'level'      => $data['level'],
                    'logged_in'  => TRUE
                ];
                $session->set($ses_data); // Menyimpan data sesi
                // Mengarahkan pengguna berdasarkan level akses
                if ($data['level'] == 1) {
                    return redirect()->to('/atk/dashboardadmin');
                } elseif ($data['level'] == 2) {
                    return redirect()->to('/dashboard/dashboardkaryawan');
                }
            } else {
                // Jika password salah, set flashdata pesan kesalahan
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            // Jika username tidak ditemukan, set flashdata pesan kesalahan
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    // Method untuk logout
    public function logout()
    {
        $session = session(); // Memulai sesi
        $session->destroy(); // Menghancurkan semua sesi
        return redirect()->to('/login'); // Mengarahkan ke halaman login
    }

    // Method untuk menampilkan halaman kelola data login
    public function manage()
    {
        $model = new LoginModel(); // Membuat instance dari LoginModel
        $data['users'] = $model->findAll(); // Mendapatkan semua data pengguna
        return view('login/manage', $data); // Menampilkan halaman pengelolaan data pengguna dengan data yang didapat
    }

    // Method untuk menampilkan form tambah data login
    public function add()
    {
        return view('login/add');
    }

    // Method untuk menyimpan data pengguna baru
    public function create()
    {
        $model = new LoginModel(); // Membuat instance dari LoginModel
        $data = [
            'username' => $this->request->getPost('username'), // Mendapatkan 'username' dari request POST
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Mendapatkan 'password' dari request POST dan melakukan hashing
            'level'    => $this->request->getPost('level') // Mendapatkan 'level' dari request POST
        ];
        $model->insert($data); // Menyimpan data ke database
        return redirect()->to('/login/manage'); // Mengarahkan ke halaman pengelolaan data login
    }

    // Method untuk menampilkan form edit login
    public function edit($id)
    {
        $model = new LoginModel(); // Membuat instance dari LoginModel
        $data['user'] = $model->find($id); // Mendapatkan data pengguna berdasarkan ID
        return view('login/edit', $data); // Menampilkan halaman edit dengan data pengguna yang didapat
    }

    // Method untuk mengupdate data login
    public function update($id)
    {
        $model = new LoginModel(); // Membuat instance dari LoginModel
        $data = [
            'username' => $this->request->getPost('username'), // Mendapatkan 'username' dari request POST
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Mendapatkan 'password' dari request POST dan melakukan hashing
            'level'    => $this->request->getPost('level') // Mendapatkan 'level' dari request POST
        ];
        $model->update($id, $data); // Mengupdate data pengguna berdasarkan ID
        return redirect()->to('/login/manage'); // Mengarahkan ke halaman pengelolaan data pengguna
    }

    // Method untuk menghapus data login
    public function delete($id)
    {
        $model = new LoginModel(); // Membuat instance dari LoginModel
        $model->delete($id); // Menghapus data pengguna berdasarkan ID
        return redirect()->to('/login/manage'); // Mengarahkan ke halaman pengelolaan data pengguna
    }
}
