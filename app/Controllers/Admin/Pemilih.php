<?php

namespace App\Controllers\Admin;

use App\Models\Modelpemilih;
use App\Controllers\BaseController;

class Pemilih extends BaseController
{

    public function __construct()
    {
        $this->modelpemilih = new Modelpemilih;
    }

    public function index()
    {
        echo view('input/inputpemilih');
    }

	public function tampil()
    {

		$data = [
			'row' => $this->modelpemilih->findAll()
		];

        echo view('tampil/pemilih', $data);
    }

    public function import(){

		$file = $this->request->getfile('fileexcel');
		$ext = $file->getClientExtension();

		if($ext == 'xls'){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		}else{
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}

		$spreadsheet = $reader->load($file);
		$sheet = $spreadsheet->getActiveSheet()->toArray();

		foreach ($sheet as $x => $excel){
			if($x == 0){
				continue;
			}
			$password = password_hash($excel[4], PASSWORD_BCRYPT);
			$data = [
				'nim' => $excel[1],
				'nama' => $excel[2],
				'fakultas' => $excel[3],
				'password' => $password,
				'dpmu' =>0,
				'dpmf' =>0,
				'bemu' =>0,
				'bemf' =>0,
				'status' =>0
			];

			$this->modelpemilih->save($data);
		}

		return 'berhasil';

	}

}
