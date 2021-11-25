<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkandidatbem extends Model
{

    protected $table = 'kandidat_bem';
    protected $allowedFields = [
        'nim_ketua', 'nama_ketua', 'prodi_ketua', 'fakultas_ketua', 'nim_wakil', 'nama_wakil', 'prodi_wakil', 'fakultas_wakil', 'visi', 'misi', 'nourut', 'ormawa', 'foto_ketua', 'foto_wakil', 'foto_paslon'
    ];

}
