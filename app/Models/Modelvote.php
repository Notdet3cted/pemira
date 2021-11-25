<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelvote extends Model
{

    protected $table = 'vote';
    protected $allowedFields = [
        'id_pemilih', 'id_paslon', 'ormawa', 'fakultas'
    ];

    public function getVote($ormawa, $id, $fakultas)
    {
        $query =  $this->db->table('vote')
            ->select('vote.*, pemilih.nama, kandidat_bem.nourut')
            ->join('pemilih', 'vote.id_pemilih = pemilih.id')
            ->join('kandidat_bem', 'vote.id_paslon = kandidat_bem.id')
            ->where(['vote.fakultas' => $fakultas, 'vote.ormawa' => $ormawa, 'id_paslon' => $id])
            ->get();
        return $query;
    }

    public function getVoteDPM($ormawa, $id, $fakultas)
    {
        $query =  $this->db->table('vote')
            ->select('vote.*, pemilih.nama as nama_pemilih, kandidat_dpm.nama')
            ->join('pemilih', 'vote.id_pemilih = pemilih.id')
            ->join('kandidat_dpm', 'vote.id_paslon = kandidat_dpm.id')
            ->where(['vote.fakultas' => $fakultas, 'vote.ormawa' => $ormawa, 'id_paslon' => $id])
            ->get();
        return $query;
    }
}
