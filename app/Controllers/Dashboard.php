<?php
namespace App\Controllers;

class Dashboard extends BaseController
{

    public function index()
    {
        $data = [
            'row'           => ['namaku', 'namamu', 'namakita'],
            'thi'           => 'nama',
            'tp'            => 'nama',
            'terima'        => 'nama',
            'proses'        => 'nama',
            'selesai'       => 'nama',
            'ambil'         => 'nama',
        ];

        echo view('dashboard', $data);
    }
}
