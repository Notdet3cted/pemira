<?php

namespace App\Controllers\Admin;

use App\Models\Modelkandidatbem;
use App\Controllers\BaseController;

class Bem extends BaseController
{

    public function __construct()
    {
        $this->modelbem = new Modelkandidatbem;
    }

    public function index()
    {

        echo view('input/inputbem');

    }

    public function tampil()
    {
        $data = [
            'row' => $this->modelbem->findAll()
        ];

        echo view('tampil/bem', $data);

    }

}
