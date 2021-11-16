<?php

namespace App\Controllers\Admin;

use App\Models\Modelkandidatdpm;
use App\Controllers\BaseController;

class Dpm extends BaseController
{

    public function __construct()
    {
        $this->modeldpm = new Modelkandidatdpm;
    }

    public function index()
    {


        echo view('input/inputdpm');

    }

    public function Tampil()
    {
        $data = [
            'row' => $this->modeldpm->findAll()
        ];

        echo view('tampil/dpm', $data);
    }

}
