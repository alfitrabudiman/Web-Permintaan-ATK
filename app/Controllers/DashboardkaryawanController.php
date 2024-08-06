<?php

namespace App\Controllers;

class DashboardkaryawanController extends BaseController
{
    public function index()
    {
        // Tampilkan halaman dashboard karyawan
        return view('dashboard/dashboardkaryawan');
    }

    public function showCreateHeader()
    {
        return view('permintaanatk/create_header');
    }
}
