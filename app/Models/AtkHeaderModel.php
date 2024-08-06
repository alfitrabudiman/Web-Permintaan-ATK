<?php

namespace App\Models;

use CodeIgniter\Model;

class AtkHeaderModel extends Model
{
    protected $table = 'atkheader';
    protected $primaryKey = 'id_header';
    protected $allowedFields = ['id_karyawan', 'nama_karyawan', 'id_departemen', 'tgl_permintaan'];

    public function getAtkByPeriodAndStatus($startDate, $endDate)
    {
        return $this->select('atkheader.nama_karyawan, atkheader.id_departemen, atkheader.tgl_permintaan, atkdetail.nama_atk, atkdetail.jumlah, atkdetail.satuan, atkdetail.status')
                    ->join('atkdetail', 'atkdetail.id_header = atkheader.id_header')
                    ->where('atkdetail.status', 'done')
                    ->where('atkheader.tgl_permintaan >=', $startDate)
                    ->where('atkheader.tgl_permintaan <=', $endDate)
                    ->findAll();
    }
}
