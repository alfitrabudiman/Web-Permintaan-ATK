<?php

namespace App\Controllers;

use App\Models\BagianperlengkapanModel;
use CodeIgniter\Controller;

class BagianperlengkapanController extends Controller
{
    public function dashboardadmin()
    {
        // Implementasi metode dashboardadmin
        return view('atk/dashboardadmin');
    }

    public function kelolabagianperlengkapan()
    {
        $bagianperlengkapanModel = new BagianperlengkapanModel();
        $data['bagianperlengkapan'] = $bagianperlengkapanModel->findAll();
        return view('bagianperlengkapan/kelola_data_bagianperlengkapan', $data);
    }

    public function add()
    {
        return view('bagianperlengkapan/add');
    }

    public function store()
    {
        $bagianperlengkapanModel = new BagianperlengkapanModel();
        $data = [
            'id_bagianperlengkapan' => $this->request->getPost('id_bagianperlengkapan'),
            'nama_bagianperlengkapan' => $this->request->getPost('nama_bagianperlengkapan'),
            'id_departemen' => $this->request->getPost('id_departemen'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin')
        ];
        

        $bagianperlengkapanModel->save($data);
        return redirect()->to('/bagianperlengkapan/kelola_data_bagianperlengkapan');
    }

    public function edit($id_bagianperlengkapan)
    {
        $bagianperlengkapanModel = new BagianperlengkapanModel();
        $data['bagianperlengkapan'] = $bagianperlengkapanModel->find($id_bagianperlengkapan);

        if (!$data['bagianperlengkapan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Bagian perlengkapan dengan ID ' . $id_bagianperlengkapan . ' tidak ditemukan.');
        }

        return view('bagianperlengkapan/edit', $data);
    }

    public function update($id_bagianperlengkapan)
    {
        $bagianperlengkapanModel = new BagianperlengkapanModel();
        $data = [
            'id_bagianperlengkapan' => $this->request->getPost('id_bagianperlengkapan'),
            'nama_bagianperlengkapan' => $this->request->getPost('nama_bagianperlengkapan'),
            'id_departemen' => $this->request->getPost('id_departemen'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin')
        ];

        $bagianperlengkapanModel->update($id_bagianperlengkapan, $data);
        return redirect()->to('/bagianperlengkapan/kelola_data_bagianperlengkapan');
    }

    public function delete($id_bagianperlengkapan)
    {
        $bagianperlengkapanModel = new BagianperlengkapanModel();
        $bagianperlengkapanModel->delete($id_bagianperlengkapan);

        return redirect()->to('/bagianperlengkapan/kelola_data_bagianperlengkapan');
    }
}
