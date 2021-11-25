<?php

namespace App\Controllers;

use App\Models\Modelkandidatbem;
use App\Models\Modelkandidatdpm;
use App\Models\Modelpemilih;
use App\Models\Modelvote;

class Vote extends BaseController
{

    public function __construct()
    {
        $this->modelvote = new Modelvote;
        $this->modelpemilih = new Modelpemilih;
        $this->modelbem = new Modelkandidatbem;
        $this->modeldpm = new Modelkandidatdpm;
    }

    public function index()
    {
        $data = $this->request->getVar();
        $msg = [
            'sukses' => $data,
            // 'token' => csrf_hash()
        ];
        echo json_encode($msg);
    }
    public function vote()
    {
        $data = [
            'id_pemilih' => $this->request->getVar('pemilih'),
            'id_paslon'     => $this->request->getVar('paslon'),
            'ormawa'        => $this->request->getVar('ormawa'),
            'fakultas' => $this->request->getVar('fakultas'),
        ];


        if ($this->request->getVar('sesi') == 'bemf') {
            $status = 1;
        } else {
            $status = 0;
        }

        $pemilih = [
            'id'    => $this->request->getVar('pemilih'),
            $this->request->getVar('sesi') => 1,
            'status' => $status,
        ];


        $this->modelpemilih->save($pemilih);
        $this->modelvote->save($data);

        $msg = [
            'sukses' => $this->request->getVar()
        ];
        echo json_encode($msg);
    }

    public function tampilbem($ormawa, $fakultas, $id)
    {
        $kd = session('kode_akses');

        if ($kd == null) {
            return redirect()->to('admin/auth');
        }
        $paslon = $this->modelbem->find($id);
        $data = [
            'paslon' => $paslon,
            'row' => $this->modelvote->getVote($ormawa, $id, $fakultas)->getResultArray()
        ];
        echo view('tampil/tampilVoteBem', $data);
    }
    public function tampildpm($ormawa, $fakultas, $id)
    {
        $kd = session('kode_akses');

        if ($kd == null) {
            return redirect()->to('admin/auth');
        }
        $paslon = $this->modeldpm->find($id);
        $data = [
            'paslon' => $paslon,
            'row' => $this->modelvote->getVoteDPM($ormawa, $id, $fakultas)->getResultArray()
        ];
        echo view('tampil/tampilVoteDPM', $data);
    }
}
