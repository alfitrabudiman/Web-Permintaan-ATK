<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rute default menuju halaman utama
$routes->get('/', 'Home::index');

// Rute untuk ATK (Alat Tulis Kantor)
$routes->get('atk/dashboardadmin', 'AtkController::dashboardadmin'); // Dashboard admin untuk ATK
$routes->get('/atk/kelola_data_atk', 'AtkController::kelolaatk'); // Halaman untuk mengelola data ATK
$routes->get('/atk/add', 'AtkController::add'); // Halaman untuk menambahkan data ATK baru
$routes->post('/atk/store', 'AtkController::store'); // Menyimpan data ATK baru
$routes->get('/atk/edit/(:segment)', 'AtkController::edit/$1'); // Halaman untuk mengedit data ATK berdasarkan ID
$routes->post('/atk/update/(:segment)', 'AtkController::update/$1'); // Memperbarui data ATK berdasarkan ID
$routes->get('/atk/delete/(:segment)', 'AtkController::delete/$1'); // Menghapus data ATK berdasarkan ID
$routes->get('/atk/getAtkById/(:num)', 'AtkController::getAtkById/$1'); // Mendapatkan data ATK berdasarkan ID

// Rute untuk Departemen
$routes->get('departemen/dashboardadmin', 'DepartemenController::dashboardadmin'); // Dashboard admin untuk Departemen
$routes->get('/departemen/kelola_data_departemen', 'DepartemenController::keloladepartemen'); // Halaman untuk mengelola data Departemen
$routes->get('/departemen/add', 'DepartemenController::add'); // Halaman untuk menambahkan data Departemen baru
$routes->post('/departemen/store', 'DepartemenController::store'); // Menyimpan data Departemen baru
$routes->get('/departemen/edit/(:segment)', 'DepartemenController::edit/$1'); // Halaman untuk mengedit data Departemen berdasarkan ID
$routes->post('/departemen/update/(:segment)', 'DepartemenController::update/$1'); // Memperbarui data Departemen berdasarkan ID
$routes->get('/departemen/delete/(:segment)', 'DepartemenController::delete/$1'); // Menghapus data Departemen berdasarkan ID

// Rute untuk Karyawan
$routes->get('karyawan/dashboardadmin', 'KaryawanController::dashboardadmin'); // Dashboard admin untuk Karyawan
$routes->get('/karyawan/kelola_data_karyawan', 'KaryawanController::kelolakaryawan'); // Halaman untuk mengelola data Karyawan
$routes->get('/karyawan/add', 'KaryawanController::add'); // Halaman untuk menambahkan data Karyawan baru
$routes->post('/karyawan/store', 'KaryawanController::store'); // Menyimpan data Karyawan baru
$routes->get('/karyawan/edit/(:segment)', 'KaryawanController::edit/$1'); // Halaman untuk mengedit data Karyawan berdasarkan ID
$routes->post('/karyawan/update/(:segment)', 'KaryawanController::update/$1'); // Memperbarui data Karyawan berdasarkan ID
$routes->get('/karyawan/delete/(:segment)', 'KaryawanController::delete/$1'); // Menghapus data Karyawan berdasarkan ID
$routes->get('karyawan/getAll', 'KaryawanController::getAllKaryawan'); // Mendapatkan semua data Karyawan

// Rute untuk Bagian Perlengkapan
$routes->get('bagianperlengkapan/dashboardadmin', 'BagianperlengkapanController::dashboardadmin'); // Dashboard admin untuk Bagian Perlengkapan
$routes->get('/bagianperlengkapan/kelola_data_bagianperlengkapan', 'BagianperlengkapanController::kelolabagianperlengkapan'); // Halaman untuk mengelola data Bagian Perlengkapan
$routes->get('/bagianperlengkapan/add', 'BagianperlengkapanController::add'); // Halaman untuk menambahkan data Bagian Perlengkapan baru
$routes->post('/bagianperlengkapan/store', 'BagianperlengkapanController::store'); // Menyimpan data Bagian Perlengkapan baru
$routes->get('/bagianperlengkapan/edit/(:segment)', 'BagianperlengkapanController::edit/$1'); // Halaman untuk mengedit data Bagian Perlengkapan berdasarkan ID
$routes->post('/bagianperlengkapan/update/(:segment)', 'BagianperlengkapanController::update/$1'); // Memperbarui data Bagian Perlengkapan berdasarkan ID
$routes->get('/bagianperlengkapan/delete/(:segment)', 'BagianperlengkapanController::delete/$1'); // Menghapus data Bagian Perlengkapan berdasarkan ID

// Rute untuk Permintaan ATK
$routes->get('/permintaanatk/createHeader', 'PermintaanatkController::createHeader'); // Halaman untuk membuat header permintaan ATK
$routes->post('/permintaanatk/storeHeader', 'PermintaanatkController::storeHeader'); // Menyimpan header permintaan ATK
$routes->get('/permintaanatk/createDetail/(:num)', 'PermintaanatkController::createDetail/$1'); // Halaman untuk membuat detail permintaan ATK berdasarkan ID header
$routes->post('/permintaanatk/storeDetail', 'PermintaanatkController::storeDetail'); // Menyimpan detail permintaan ATK
$routes->get('/permintaanatk/success', 'PermintaanatkController::success'); // Halaman sukses setelah permintaan ATK
$routes->get('/permintaanatk/view_header', 'PermintaanatkController::viewHeader'); // Halaman untuk melihat header permintaan ATK
$routes->get('/permintaanatk/viewDetail/(:num)', 'PermintaanatkController::viewDetail/$1'); // Halaman untuk melihat detail permintaan ATK berdasarkan ID header
$routes->get('/permintaanatk/editDetail/(:num)', 'PermintaanatkController::editDetail/$1'); // Halaman untuk mengedit detail permintaan ATK berdasarkan ID header
$routes->post('/permintaanatk/updateDetail', 'PermintaanatkController::updateDetail'); // Memperbarui detail permintaan ATK
$routes->get('permintaanatk/dashboardadmin', 'PermintaanatkController::dashboardadmin'); // Dashboard admin untuk Permintaan ATK

// Rute untuk Dashboard Karyawan
$routes->get('dashboardkaryawan', 'DashboardkaryawanController::index', ['as' => 'dashboard']); // Halaman dashboard karyawan
$routes->get('permintaanatk/create_header', 'DashboardkaryawanController::showCreateHeader', ['as' => 'permintaanatk_create_header']); // Halaman untuk membuat header permintaan ATK dari dashboard karyawan

// Rute untuk Laporan
$routes->get('/permintaanatk/reportForm', 'PermintaanatkController::reportForm'); // Halaman untuk form laporan permintaan ATK
$routes->post('/permintaanatk/generateReport', 'PermintaanatkController::generateReport'); // Menghasilkan laporan permintaan ATK
$routes->post('/permintaanatk/exportPdf', 'PermintaanatkController::exportPdf'); // Mengekspor laporan permintaan ATK ke PDF
$routes->get('permintaanatk/report_form', 'PermintaanatkController::reportForm'); // Halaman form laporan permintaan ATK

// Rute untuk Login
$routes->get('/login', 'Login::index'); // Halaman login
$routes->post('/login/auth', 'Login::auth'); // Autentikasi login
$routes->get('/logout', 'Login::logout'); // Logout
$routes->get('/login/manage', 'Login::manage'); // Halaman untuk mengelola akun login
$routes->get('/login/add', 'Login::add'); // Halaman untuk menambahkan akun login baru
$routes->post('/login/create', 'Login::create'); // Menyimpan akun login baru
$routes->get('/login/edit/(:segment)', 'Login::edit/$1'); // Halaman untuk mengedit akun login berdasarkan ID
$routes->post('/login/update/(:segment)', 'Login::update/$1'); // Memperbarui akun login berdasarkan ID
$routes->get('/login/delete/(:segment)', 'Login::delete/$1'); // Menghapus akun login berdasarkan ID

// Rute tambahan untuk tampilan dashboard ATK dan dashboard karyawan
$routes->get('/atk/dashboardadmin', function() {
    return view('atk/dashboardadmin');
});
$routes->get('/dashboard/dashboardkaryawan', function() {
    return view('dashboard/dashboardkaryawan');
});

// Rute untuk Logout (ganda, mungkin perlu diperbaiki)
$routes->get('logout', 'Login::logout');
$routes->get('logout', 'Login::logout');

// Fitur dashboard BG (belum jelas, mungkin perlu diperbaiki)
$routes->get('/dashboardadmin', 'AtkController::dashboardadmin');
$routes->get('permintaanatk/view_header', 'PermintaanAtk::view_header');

// penerimaan atk
$routes->get('penerimaan/atk_penerimaan', 'PenerimaanController::index');
$routes->post('penerimaan/penerimaan', 'PenerimaanController::penerimaan');
$routes->post('penerimaan/generatePdf', 'PenerimaanController::generatePdf');

