<?php

namespace App\Controllers;

use App\Models\AtkModel;
use CodeIgniter\Controller;

class AtkController extends Controller
{
    // Method untuk menampilkan dashboard admin
    public function dashboardadmin()
    {
        $atk = new AtkModel(); // Membuat instance dari model AtkModel
        $totalJenisAtk = $atk->getTotalJenisAtk(); // Mengambil total jenis ATK dari database
        
        $data['totalJenisAtk'] = $totalJenisAtk; // Menyimpan total jenis ATK ke dalam array data

        return view('atk/dashboardadmin', $data); // Mengembalikan view 'atk/dashboardadmin' dengan data yang sudah disiapkan
    }

    // Method untuk menampilkan halaman pengelolaan data ATK
    public function kelolaatk()
    {
        $atk = new AtkModel(); // Membuat instance dari model AtkModel
        $data['atk'] = $atk->findAll(); // Mengambil semua data ATK dari database
        return view('atk/kelola_data_atk', $data); // Mengembalikan view 'atk/kelola_data_atk' dengan data yang sudah disiapkan
    }

    // Method untuk menampilkan halaman penambahan data ATK
    public function add()
    {
        return view('atk/add'); // Mengembalikan view 'atk/add'
    }

    // Method untuk menyimpan data ATK baru ke database
    public function store()
    {
        $atk = new AtkModel(); // Membuat instance dari model AtkModel
        $data = [
            'id_atk'           => $this->request->getPost('id_atk'), // Mengambil data 'id_atk' dari POST request
            'nama_atk'         => $this->request->getPost('nama_atk'), // Mengambil data 'nama_atk' dari POST request
            'stok'             => $this->request->getPost('stok'), // Mengambil data 'stok' dari POST request
            'satuan'           => $this->request->getPost('satuan'), // Mengambil data 'satuan' dari POST request
        ];

        $atk->save($data); // Menyimpan data ke dalam database
        return redirect()->to('/atk/kelola_data_atk'); // Redirect ke halaman pengelolaan data ATK
    }

    // Method untuk menampilkan halaman edit data ATK
    public function edit($id_atk)
    {
        $atk = new AtkModel(); // Membuat instance dari model AtkModel
        $data['atk'] = $atk->find($id_atk); // Mengambil data ATK berdasarkan ID
        return view('atk/edit', $data); // Mengembalikan view 'atk/edit' dengan data yang sudah disiapkan
    }

    // Method untuk mengupdate data ATK ke dalam database
    public function update($id_atk)
    {
        $atk = new AtkModel(); // Membuat instance dari model AtkModel
        $data = [
            'nama_atk'       => $this->request->getPost('nama_atk'), // Mengambil data 'nama_atk' dari POST request
            'stok'           => $this->request->getPost('stok'), // Mengambil data 'stok' dari POST request
            'satuan'         => $this->request->getPost('satuan'), // Mengambil data 'satuan' dari POST request
        ];

        $atk->update($id_atk, $data); // Mengupdate data ke dalam database
        return redirect()->to('/atk/kelola_data_atk'); // Redirect ke halaman pengelolaan data ATK
    }

    // Method untuk menghapus data ATK dari database
    public function delete($id_atk)
    {
        $atk = new AtkModel(); // Membuat instance dari model AtkModel  
        $atk->delete($id_atk); // Menghapus data ATK berdasarkan ID

        return redirect()->to('/atk/kelola_data_atk'); // Redirect ke halaman pengelolaan data ATK
    }

    // Method untuk mengambil data ATK berdasarkan ID dan mengembalikannya dalam format JSON
    // public function getAtkById($id_atk)
    // {
    //     $model = new AtkModel(); // Membuat instance dari model AtkModel
    //     $atk = $model->find($id_atk); // Mengambil data ATK berdasarkan ID

    //     return $this->response->setJSON($atk); // Mengembalikan data dalam format JSON
    // }
}
