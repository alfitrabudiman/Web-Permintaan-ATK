<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianperlengkapanModel extends Model
{
    protected $table = 'bagianperlengkapan';
    protected $primaryKey = 'id_bagianperlengkapan';
    protected $allowedFields = ['nama_bagianperlengkapan', 'id_departemen', 'jenis_kelamin'];
}