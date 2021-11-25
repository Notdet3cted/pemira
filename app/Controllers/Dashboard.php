<?php

namespace App\Controllers;

use App\Models\Modelkandidatbem;
use App\Models\Modelkandidatdpm;
use App\Models\Modelvote;

class Dashboard extends BaseController
{

    public function __construct()
    {
        $this->modeldpm  = new Modelkandidatdpm;
        $this->modelbem  = new Modelkandidatbem;
        $this->modelvote = new Modelvote;
    }


    public function index()
    {
        $kd = session('kode_akses');

        if ($kd == null) {
            return redirect()->to('admin/auth');
        }

        $fak = [
            ['kode' => 'FT', 'label' => 'Teknik'],
            ['kode' => 'FEB', 'label' => 'Ekonomi dan Bisnis'],
            ['kode' => 'FKIP', 'label' => 'Keguruan dan Ilmu Pendidikan'],
            ['kode' => 'FPSI', 'label' => 'Psikologi'],
            ['kode' => 'FPT', 'label' => 'Pertanian'],
            ['kode' => 'FH', 'label' => 'Hukum'],
        ];
        $ormawa = ['DPM UNIVERSITAS', 'DPM FAKULTAS', 'BEM UNIVERSITAS', 'BEM FAKULTAS'];

        foreach ($fak as $dpmfak) {
            $dpmfakultas['DPM' . $dpmfak['kode']] = $this->modeldpm->where(['ormawa' => 'DPM' . $dpmfak['kode']])->findAll();
            $bemfakultas['BEM' . $dpmfak['kode']] = $this->modelbem->where(['ormawa' => 'BEM' . $dpmfak['kode']])->findAll();
        }

        $bemuniversitas = $this->modelbem->where(['ormawa' => 'BEMU'])->findAll();
        $dpmuniversitas = $this->modeldpm->where(['ormawa' => 'DPMU'])->findAll();
        // dd($bemuniversitas);
        $data = [
            'fak' => $fak,
            'orm' => $ormawa,
            'dpmu' => $dpmuniversitas,
            'dpmf' => $dpmfakultas,
            'bemu' => $bemuniversitas,
            'bemf' => $bemfakultas,
            'suara' => $this->modelvote
        ];

        echo view('dashboard', $data);
    }
}
