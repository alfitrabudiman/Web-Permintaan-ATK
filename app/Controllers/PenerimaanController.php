<?php

namespace App\Controllers;

use App\Models\AtkHeaderModel;
use App\Models\AtkDetailModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;

class PenerimaanController extends Controller
{
    public function index()
    {
        return view('penerimaan/atk_penerimaan');
    }

    public function penerimaan()
    {
        $session = session();

        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');

        $session->set('start_date', $startDate);
        $session->set('end_date', $endDate);

        $headerModel = new AtkHeaderModel();
        $detailModel = new AtkDetailModel();

        $headerData = $headerModel->where('tgl_permintaan >=', $startDate)
                                   ->where('tgl_permintaan <=', $endDate)
                                   ->findAll();

        $atkData = [];
        foreach ($headerData as $header) {
            $details = $detailModel->where('id_header', $header['id_header'])
                                   ->where('status', 'done')
                                   ->findAll();

            foreach ($details as $detail) {
                $atkData[] = [
                    'nama_karyawan' => $header['nama_karyawan'],
                    'id_departemen' => $header['id_departemen'],
                    'tgl_permintaan' => $header['tgl_permintaan'],
                    'nama_atk' => $detail['nama_atk'],
                    'jumlah' => $detail['jumlah'],
                    'satuan' => $detail['satuan'],
                    'status' => $detail['status']
                ];
            }
        }

        return view('penerimaan/atk_penerimaan', ['atk_data' => $atkData]);
    }

    public function generatePdf()
{
    $session = session();

    $startDate = $session->get('start_date');
    $endDate = $session->get('end_date');

    $headerModel = new AtkHeaderModel();
    $detailModel = new AtkDetailModel();

    $headerData = $headerModel->where('tgl_permintaan >=', $startDate)
                               ->where('tgl_permintaan <=', $endDate)
                               ->findAll();

    $atkData = [];
    foreach ($headerData as $header) {
        $details = $detailModel->where('id_header', $header['id_header'])
                               ->where('status', 'done')
                               ->findAll();

        foreach ($details as $detail) {
            $atkData[] = [
                'nama_karyawan' => $header['nama_karyawan'],
                'id_departemen' => $header['id_departemen'],
                'tgl_permintaan' => $header['tgl_permintaan'],
                'nama_atk' => $detail['nama_atk'],
                'jumlah' => $detail['jumlah'],
                'satuan' => $detail['satuan'],
                'status' => $detail['status']
            ];
        }
    }

    $data['atk_data'] = $atkData;
    $data['start_date'] = $startDate; // Mengirimkan start_date ke view
    $data['end_date'] = $endDate;     // Mengirimkan end_date ke view

    $dompdf = new Dompdf();
    $html = view('penerimaan/pdf_template', $data); // Mengirimkan data ke pdf_template.php
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("penerimaan_atk.pdf", array("Attachment" => 0));
}
}