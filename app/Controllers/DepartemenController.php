<?php

namespace App\Controllers;

use App\Models\DepartemenModel;
use CodeIgniter\Controller;

class DepartemenController extends Controller
{
    public function dashboardadmin()
    {
        // Implementasi metode dashboardadmin
        return view('atk/dashboardadmin');
    }
    
    public function keloladepartemen()
    {
        $departemen = new DepartemenModel();
        $data['departemen'] = $departemen->findAll();
        return view('departemen/kelola_data_departemen', $data);
    }

    public function add()
    {
        return view('departemen/add');
    }

    public function store()
    {
        $departemen = new DepartemenModel();
        $data = [
            'id_departemen'           => $this->request->getPost('id_departemen'),
            'nama_departemen'          => $this->request->getPost('nama_departemen'),
        ];

        $departemen->save($data);
        return redirect()->to('/departemen/kelola_data_departemen');
    }

    public function edit($id_departemen)
    {
        $departemen = new DepartemenModel();
        $data['departemen'] = $departemen->find($id_departemen);
        return view('departemen/edit', $data);
    }

    public function update($id_departemen)
    {
        $departemen = new DepartemenModel();
        $data = [
        'nama_departemen'       => $this->request->getPost('nama_departemen'),
        ];

        $departemen->update($id_departemen, $data);
        return redirect()->to('/departemen/kelola_data_departemen');
    }

    public function delete($id_departemen)
    {
        $departemen = new DepartemenModel();
        $departemen->delete($id_departemen);

        return redirect()->to('/departemen/kelola_data_departemen');
}
}
