<?php

namespace App\Models;

use CodeIgniter\Model;

class modeladmin extends Model
{

    protected $table = 'admin';
    protected $allowedFields = [
        'kode_akses', 'password', 'role'
    ];
}
