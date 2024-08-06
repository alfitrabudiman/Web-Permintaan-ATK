<?php

namespace App\Controllers;

use App\Models\AtkHeaderModel;
use App\Models\AtkDetailModel;
use App\Models\AtkModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

class PermintaanatkController extends Controller
{
    // Menampilkan dashboard admin
    public function dashboardadmin()
    {
        return view('atk/dashboardadmin');
    }
    
    // Menampilkan form untuk membuat header permintaan ATK
    public function createHeader()
    {
        return view('permintaanatk/create_header');
    }

    // Menyimpan data header permintaan ATK
    public function storeHeader()
    {
        $model = new AtkHeaderModel();
        $data = [
            'id_karyawan' => $this->request->getPost('id_karyawan'),
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'id_departemen' => $this->request->getPost('id_departemen'),
            'tgl_permintaan' => $this->request->getPost('tgl_permintaan')
        ];
        $model->insert($data);

        // Redirect ke halaman untuk menambahkan detail permintaan ATK
        return redirect()->to('/permintaanatk/createDetail/' . $model->insertID());
    }

    // Menampilkan form untuk menambahkan detail permintaan ATK
    public function createDetail($id_header)
    {
        $atkModel = new AtkModel();
        $data['id_header'] = $id_header;
        $data['atk'] = $atkModel->findAll(); // Mengambil semua data ATK
        return view('permintaanatk/create_detail', $data);
    }

    // Menyimpan detail permintaan ATK
    public function storeDetail()
    {
        $model = new AtkDetailModel();
        
        $id_header = $this->request->getPost('id_header');
        $id_atks = $this->request->getPost('id_atk');
        $nama_atks = $this->request->getPost('nama_atk');
        $satuans = $this->request->getPost('satuan');
        $jumlahs = $this->request->getPost('jumlah');
        $statuses = $this->request->getPost('status');

        try {
            // Memulai transaksi database
            $db = \Config\Database::connect();
            $db->transBegin();

            // Memasukkan data ke database untuk setiap baris input
            foreach ($id_atks as $index => $id_atk) {
                $data = [
                    'id_header' => $id_header,
                    'id_atk' => $id_atk,
                    'nama_atk' => $nama_atks[$index],
                    'satuan' => $satuans[$index],
                    'jumlah' => $jumlahs[$index],
                    'status' => $statuses[$index]
                ];
                $model->insert($data);
            }

            // Commit transaksi
            $db->transCommit();

            // Mengembalikan respon JSON sukses
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil disimpan']);
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            $db->transRollback();

            // Mengembalikan respon JSON error
            return $this->response->setJSON(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    // Menampilkan daftar header permintaan ATK dengan fitur pencarian dan pagination
    public function viewHeader()
    {
        $model = new AtkHeaderModel();

        // Mendapatkan nilai entries dan search dari query string
        $entries = $this->request->getGet('entries') ?? 5;
        $search = $this->request->getGet('search') ?? '';

        // Logika pencarian
        if ($search) {
            $model->like('id_header', $search)
                  ->orLike('id_karyawan', $search)
                  ->orLike('nama_karyawan', $search)
                  ->orLike('id_departemen', $search)
                  ->orLike('tgl_permintaan', $search);
        }

        // Dapatkan data dengan pagination
        $data['headers'] = $model->paginate($entries);
        $data['pager'] = $model->pager;
        $data['entries'] = $entries;
        $data['search'] = $search;

        return view('permintaanatk/view_header', $data);
    }

    // Menampilkan detail permintaan ATK berdasarkan ID header
    public function viewDetail($id_header)
    {
        $model = new AtkDetailModel();
        $data['details'] = $model->where('id_header', $id_header)->findAll();

        return view('permintaanatk/view_detail', $data);
    }

    // Menampilkan form untuk mengedit detail permintaan ATK berdasarkan ID detail
    public function editDetail($id_detail)
    {
        $model = new AtkDetailModel();
        $data['detail'] = $model->find($id_detail);

        return view('permintaanatk/edit_detail', $data);
    }

    // Memperbarui detail permintaan ATK berdasarkan ID detail
    public function updateDetail()
    {
        $model = new AtkDetailModel();
        $id_detail = $this->request->getPost('id_detail');
        $data = [
            'id_header' => $this->request->getPost('id_header'),
            'id_atk' => $this->request->getPost('id_atk'),
            'nama_atk' => $this->request->getPost('nama_atk'),
            'satuan' => $this->request->getPost('satuan'),
            'jumlah' => $this->request->getPost('jumlah'),
            'status' => $this->request->getPost('status')
        ];
        $model->update($id_detail, $data);

        // Redirect kembali ke halaman detail permintaan ATK
        return redirect()->to('/permintaanatk/viewDetail/' . $data['id_header']);
    }

    // Menampilkan form untuk membuat laporan permintaan ATK
    public function reportForm()
    {
        return view('permintaanatk/report_form');
    }

    // Menghasilkan laporan permintaan ATK dalam format PDF
    public function generateReport()
    {
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');
        
        $headerModel = new AtkHeaderModel();
        $detailModel = new AtkDetailModel();
        
        $headers = $headerModel->where('tgl_permintaan >=', $startDate)
                               ->where('tgl_permintaan <=', $endDate)
                               ->findAll();
        
        $data = [];
        foreach ($headers as $header) {
            $details = $detailModel->where('id_header', $header['id_header'])->findAll();
            $data[] = [
                'header' => $header,
                'details' => $details
            ];
        }
        
        // Melewatkan variabel $startDate dan $endDate saat memanggil view 'report'
        return view('permintaanatk/report', [
            'data' => $data,
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);
    }

    // Mengexport laporan permintaan ATK dalam format PDF
    public function exportPdf() {
        // Memperpanjang waktu eksekusi PHP
        ini_set('max_execution_time', 300); // 300 detik (5 menit)

        // Ambil data dari form atau request
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');
        
        // Ambil data dari model (disesuaikan dengan model dan data yang Anda gunakan)
        $headerModel = new AtkHeaderModel();
        $detailModel = new AtkDetailModel();
        
        $headers = $headerModel->where('tgl_permintaan >=', $startDate)
                               ->where('tgl_permintaan <=', $endDate)
                               ->findAll();
        
        $data = [];
        foreach ($headers as $header) {
            $details = $detailModel->where('id_header', $header['id_header'])->findAll();
            $data[] = [
                'header' => $header,
                'details' => $details
            ];
        }
        
        // Load HTML template untuk laporan PDF
        $html = view('permintaanatk/report_pdf', [
            'data' => $data,
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);

        // Inisialisasi Dompdf
        $dompdf = new Dompdf($options);

        // Muat HTML ke Dompdf
        $dompdf->loadHtml($html);

        // Set paper size dan orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF (generate PDF)
        $dompdf->render();

        // Set nama file output (opsional)
        $filename = 'Laporan_Permintaan_ATK.pdf';

        // Tampilkan PDF ke user (stream PDF)
        $dompdf->stream($filename, array('Attachment' => false));
    }
}
