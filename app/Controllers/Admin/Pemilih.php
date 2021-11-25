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

	public function input($id = null)
	{
		$kd = session('kode_akses');

		if ($kd == null) {
			return redirect()->to('admin/auth');
		}
		if ($id == null) {
			$data = [
				'row' => "",
			];
		} else {
			$data = [
				'row' => $this->modelpemilih->find($id),
			];
		}
		echo view('input/inputpemilih', $data);
	}

	public function tampil()
	{
		$kd = session('kode_akses');

		if ($kd == null) {
			return redirect()->to('admin/auth');
		}

		$data = [
			'row' => $this->modelpemilih->findAll()
		];

		echo view('tampil/pemilih', $data);
	}

	public function import()
	{

		$file = $this->request->getfile('fileexcel');
		$ext = $file->getClientExtension();

		if ($ext == 'xls') {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}

		$spreadsheet = $reader->load($file);
		$sheet = $spreadsheet->getActiveSheet()->toArray();

		foreach ($sheet as $x => $excel) {
			if ($x == 0) {
				continue;
			}
			$password = password_hash($excel[5], PASSWORD_BCRYPT);
			$data = [
				'nim' => $excel[1],
				'nama' => $excel[2],
				'fakultas' => $excel[3],
				'prodi' => $excel[4],
				'password' => $password,
				'dpmu' => 0,
				'dpmf' => 0,
				'bemu' => 0,
				'bemf' => 0,
				'status' => 0
			];
			$simpan = $this->modelpemilih->save($data);
		}
		if ($simpan) {
			session()->setFlashdata([
				"pesan" => "Data Berhasil Diupdate",
				"icon" => "success",
			]);
			return redirect()->to('admin/pemilih/tampil');
		} else {
			session()->setFlashdata([
				"pesan" => "Data Gagal Diupdate",
				"icon" => "error",
			]);
			return redirect()->to('admin/pemilih/tampil');
		}
	}
	public function delete($id = null)
	{
		$data = $this->modelpemilih->find($id);
		if ($data) {
			$this->modelpemilih->delete($data);
			session()->setFlashdata([
				"pesan" => "Data Berhasil Dihapus",
				"icon" => "success",
			]);
			return redirect()->to('admin/pemilih/tampil');
		} else {
			session()->setFlashdata([
				"pesan" => "Data Tidak Ditemukan",
				"icon" => "error",
			]);
		}
	}
	public function update()
	{
		$data = [
			"id"        => $this->request->getVar("id"),
			'nim' 		=> $this->request->getVar("nim"),
			'nama' 		=> $this->request->getVar("nama"),
			'fakultas' 	=> $this->request->getVar("fakultas"),
			'prodi'		=> $this->request->getVar("prodi"),
			'password' 	=> $this->request->getVar("password"),
			'dpmu' 		=> $this->request->getVar("dpmu"),
			'dpmf' 		=> $this->request->getVar("dpmf"),
			'bemu' 		=> $this->request->getVar("bemu"),
			'bemf' 		=> $this->request->getVar("bemf"),
			'status' 	=> $this->request->getVar("status"),
		];
		$simpan = $this->modelpemilih->save($data);
		if ($simpan) {
			session()->setFlashdata([
				"pesan" => "Data Berhasil Diupdate",
				"icon" => "success",
			]);
			return redirect()->to('admin/pemilih/tampil');
		} else {
			session()->setFlashdata([
				"pesan" => "Data Gagal Diupdate",
				"icon" => "error",
			]);
			return redirect()->to('admin/pemilih/tampil');
		}
	}
}
