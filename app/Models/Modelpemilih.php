<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpemilih extends Model
{

    protected $table = 'pemilih';
    protected $allowedFields = [
        'nim', 'nama', 'fakultas', 'prodi', 'password', 'dpmu', 'dpmf', 'bemu', 'bemf', 'status'
    ];
}
