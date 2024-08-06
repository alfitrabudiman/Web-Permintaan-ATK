<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = ['username', 'password', 'level'];
}
