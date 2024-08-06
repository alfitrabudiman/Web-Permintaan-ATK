<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use CodeIgniter\Controller;

class KaryawanController extends Controller
{
    public function dashboardadmin()
    {
        // Implementasi metode dashboardadmin
        return view('atk/dashboardadmin');
    }

    public function kelolakaryawan()
    {
        $karyawan = new KaryawanModel();
        $data['karyawan'] = $karyawan->findAll();
        return view('karyawan/kelola_data_karyawan', $data);
    }

    public function add()
    {
        return view('karyawan/add');
    }

    public function store()
    {
        $karyawan = new KaryawanModel();
        $data = [
            'id_karyawan' => $this->request->getPost('id_karyawan'),
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'id_departemen' => $this->request->getPost('id_departemen'),
        ];

        $karyawan->save($data);
        return redirect()->to('/karyawan/kelola_data_karyawan');
    }

    public function edit($id_karyawan)
    {
        $karyawan = new KaryawanModel();
        $data['karyawan'] = $karyawan->find($id_karyawan);
        return view('karyawan/edit', $data);
    }

    public function update($id_karyawan)
    {
        $karyawan = new KaryawanModel();
        $data = [
            'id_karyawan' => $this->request->getPost('id_karyawan'),
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'id_departemen' => $this->request->getPost('id_departemen'),
        ];

        $karyawan->update($id_karyawan, $data);
        return redirect()->to('/karyawan/kelola_data_karyawan');
    }

    public function delete($id_karyawan)
    {
        $karyawan = new KaryawanModel();
        $karyawan->delete($id_karyawan);

        return redirect()->to('/karyawan/kelola_data_karyawan');
    }

    public function getAllKaryawan()
    {
        $model = new KaryawanModel();
        $karyawan = $model->findAll();
        
        return $this->response->setJSON($karyawan);
    }
    

    
}
