<?php

namespace App\Controllers;

use App\Models\Modelkandidatbem;
use App\Models\Modelkandidatdpm;
use App\Models\Modelpemilih;

class Home extends BaseController
{

    public function __construct()
    {
        $this->modelpemilih = new Modelpemilih;
        $this->modelkandidatbem = new Modelkandidatbem;
        $this->modelkandidatdpm = new Modelkandidatdpm;
    }

    public function dpmf()
    {

        $id = session('id_pemilih');
        
        if($id == null){
            return redirect()->to('auth');
        }  
        
        $pemilih = $this->modelpemilih->where(['id' => $id])->first();

        if (!$pemilih) {
            return redirect()->to('auth');
        }

        if($pemilih['dpmf'] != 0){
            return redirect()->to('home/bemu/');
        }

        switch (session('fakultas')) {
            case 'Teknik':
                $fak = 'DPMFT';
                break;
            case 'FEB':
                $fak = 'DPMFEB';
                break;
            case 'FKIP':
                $fak = 'DPMFKIP';
                break;
            case 'FH':
                $fak = 'DPMFH';
                break;
            case 'FAPERTA':
                $fak = 'DPMFPT';
                break;
            case 'PSIKOLOG':
                $fak = 'DPMPSI';
                break;
        }


        $data = [
            'kandidat'  => $this->modelkandidatdpm->where(['ormawa' => $fak])->findAll(),
            'ormawa'    => 'DPMF',
            'sesi'      => 'dpmf',
            'title'     => "Calon Ketua $fak"
        ];

        echo view("dpm", $data);
    }

    public function dpmu()
    {

        $id = session('id_pemilih');
        
        if($id == null){
            return redirect()->to('auth');
        }  
        
        $pemilih = $this->modelpemilih->where(['id' => $id])->first();

        if (!$pemilih) {
            return redirect()->to('auth');
        }

        if($pemilih['dpmu'] != 0){
            return redirect()->to('home/dpmf/');
        }

        $data = [
            'kandidat'  => $this->modelkandidatdpm->where(['ormawa' => 'DPMU'])->findAll(),
            'ormawa'    => 'DPMU',
            'sesi'      => 'dpmu',
            'title'     => "Calon Ketua dan Wakil Ketua DPM Universitas"
        ];

        echo view("dpm", $data);
    }
    public function bemu($id = null)
    {

        $id = session('id_pemilih');
        
        if($id == null){
            return redirect()->to('auth');
        }  
        
        $pemilih = $this->modelpemilih->where(['id' => $id])->first();

        if (!$pemilih) {
            return redirect()->to('auth');
        }

        if($pemilih['bemu'] != 0){
            return redirect()->to('home/bemf/');
        }

        $data = [
            'kandidat' => $this->modelkandidatbem->where(['ormawa' => 'BEMU'])->findAll(),
            'ormawa'    => 'BEMU',
            'sesi'      => 'bemu',
            'title'     => "Calon Ketua dan Wakil Ketua Universitas"
        ];

        echo view("bem", $data);
    }
    public function bemf()
    {

        $id = session('id_pemilih');
        
        if($id == null){
            return redirect()->to('auth');
        }  
        
        $pemilih = $this->modelpemilih->where(['id' => $id])->first();

        if (!$pemilih) {
            return redirect()->to('auth');
        }

        if($pemilih['bemf'] != 0){
            return redirect()->to('auth/logout');
        }

        switch (session('fakultas')) {
            case 'Teknik':
                $fak = 'BEMFT';
                break;
            case 'FEB':
                $fak = 'BEMFEB';
                break;
            case 'FKIP':
                $fak = 'BEMFKIP';
                break;
            case 'FH':
                $fak = 'BEMFH';
                break;
            case 'FAPERTA':
                $fak = 'BEMFPT';
                break;
            case 'PSIKOLOG':
                $fak = 'BEMPSI';
                break;
        }
        
        $data = [
            'kandidat' => $this->modelkandidatbem->where(['ormawa' => $fak])->findAll(),
            'ormawa'    => 'BEMF',
            'sesi'      => 'bemf',
            'title'     => "Calon Ketua dan Wakil Ketua $fak"
        ];

        echo view("bem", $data);
    }
}
