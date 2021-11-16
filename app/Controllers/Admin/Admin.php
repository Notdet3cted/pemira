<?php

namespace App\Controllers;

use App\Models\Modelcoba;
use App\Models\Modelpemilih;

class Admin extends BaseController
{


	public function __construct()
	{
		$this->modelpemilih = new Modelpemilih;
		$this->modelcoba = new Modelcoba;
	}
    public function index()
    {

		$data = [
			'coba' => $this->modelcoba->findAll()
		];

        echo view('impor', $data);
    }

    public function importExcel(){

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

	public function importDPM(){

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

	public function post()
	{

		$gambar = $this->request->getfile('gambar');
		$filename = $gambar->getName();
		$gambar->move('upload/', $filename);
		$data = [
			'gambar' => $filename,
			'summer' => $this->request->getVar('summer'),
		];

		$this->modelcoba->save($data);

		return 'berhasil';
	}
}
