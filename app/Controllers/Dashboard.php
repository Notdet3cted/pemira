<?php
namespace App\Controllers;

use App\Models\Modelkandidatbem;
use App\Models\Modelkandidatdpm;
use App\Models\Modelvote;

class Dashboard extends BaseController
{

    public function __construct()
    {
        $this->modeldpm = new Modelkandidatdpm;
        $this->modelbem = new Modelkandidatbem;
    }


    public function index()
    {

        $fakultas = ['Teknik', 'Ekonomi dan Bisnis', 'Pertaninan', 'Psikolog' ,'Keguruan dan Ilmu Pendidikan', 'Hukum'];
        $fak = ['FT', 'FEB','FH','FPSI','FKIP','FPT'];
        $ormawa = ['DPM UNIVERSITAS', 'DPM FAKULTAS', 'BEM UNIVERSITAS', 'BEM FAKULTAS'];

        $bayar = ["Sudah Bayar", "Belum"];
        $stb[null] = '-- Status Bayar --';
        foreach ($bayar as $byr) {
            $stb[$byr] = $byr;
        }

        foreach ($fak as $dpmfak){
            $dpmfakultas['DPM'.$dpmfak] = $this->modeldpm->where(['ormawa'=>'DPM'.$dpmfak])->findAll();
        }

        // dd($dpmfakultas);

        $dpmuniversitas = $this->modeldpm->where(['ormawa' => 'DPMU'])->findAll();
        $data = [
            'fak' => $fakultas,
            'orm' => $ormawa,
            'dpmu' => $dpmuniversitas,
            'dpmf' => $dpmfakultas,
        ];

        echo view('dashboard', $data);
    }
}
