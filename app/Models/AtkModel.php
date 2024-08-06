<?php

namespace App\Models;

use CodeIgniter\Model;

class AtkModel extends Model
{
    protected $table = 'atk';
    protected $primaryKey = 'id_atk';
    protected $allowedFields = ['nama_atk', 'stok', 'satuan'];

    public function getTotalJenisAtk()
    {
        return $this->countAll();
    }
}
