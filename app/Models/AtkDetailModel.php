<?php

namespace App\Models;

use CodeIgniter\Model;

class AtkDetailModel extends Model
{
    protected $table = 'atkdetail';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = ['id_header', 'id_atk', 'nama_atk', 'satuan', 'jumlah', 'status'];
}
