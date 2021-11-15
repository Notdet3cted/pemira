<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkandidatdpm extends Model
{

    protected $table = 'kandidat_dpm';
    protected $allowedFields = [
        'nim', 'nama', 'prodi', 'fakultas', 'visi', 'misi', 'nourut', 'ormawa'
    ];

}
