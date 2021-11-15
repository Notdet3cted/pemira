<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelvote extends Model
{

    protected $table = 'vote';
    protected $allowedFields = [
        'id_pemilih', 'id_paslon', 'ormawa'
    ];
}
