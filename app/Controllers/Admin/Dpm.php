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

    public function input($id = null)
    {
        $kd = session('kode_akses');

        if ($kd == null) {
            return redirect()->to('admin/auth');
        }
        $fakultas = [
            ['kode' => 'FT', 'label' => 'Teknik'],
            ['kode' => 'FEB', 'label' => 'Ekonomi dan Bisnis'],
            ['kode' => 'FKIP', 'label' => 'Keguruan dan Ilmu Pendidikan'],
            ['kode' => 'FPSI', 'label' => 'Psikologi'],
            ['kode' => 'FPT', 'label' => 'Pertanian'],
            ['kode' => 'FH', 'label' => 'Hukum'],
        ];

        $ormawa = [
            ['kode' => 'DPMU', 'label' => 'Universitas'],
            ['kode' => 'DPMFT', 'label' => 'Teknik'],
            ['kode' => 'DPMFEB', 'label' => 'Ekonomi dan Bisnis'],
            ['kode' => 'DPMFKIP', 'label' => 'Keguruan dan Ilmu Pendidikan'],
            ['kode' => 'DPMFPSI', 'label' => 'Psikologi'],
            ['kode' => 'DPMFPT', 'label' => 'Pertanian'],
            ['kode' => 'DPMFH', 'label' => 'Hukum'],
        ];

        if ($id == null) {
            $data = [
                'button' => 'Simpan Data',
                'action' => site_url('admin/dpm/create'),
                'ormawa' => $ormawa,
                'fakultas' => $fakultas,
                'row' => "",
            ];
        } else {
            $data = [
                'button' => 'Ubah Data',
                'action' => site_url('admin/dpm/update/') . $id,
                'ormawa' => $ormawa,
                'fakultas' => $fakultas,
                'row' => $this->modeldpm->find($id),
            ];
        }

        echo view('input/inputdpm', $data);
    }

    public function Tampil()
    {
        $kd = session('kode_akses');

        if ($kd == null) {
            return redirect()->to('admin/auth');
        }
        $data = [
            'row' => $this->modeldpm->orderBy('id', 'DESC')->findAll()
        ];

        echo view('tampil/dpm', $data);
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

            $data = [
                'nim' => $excel[1],
                'nama' => $excel[2],
                'prodi' => $excel[3],
                'fakultas' => $excel[4],
                'nourut' => $excel[5],
                'ormawa' => $excel[6],
                'visi' => $excel[7],
                'misi' => $excel[8],
                'foto_dpm' => $excel[9],
            ];

            $this->modeldpm->save($data);
        }

        return redirect()->to('admin/dpm/tampil');
    }
    public function delete($id = null)
    {
        $data = $this->modeldpm->find($id);
        if ($data) {
            $this->modeldpm->delete($data);
            session()->setFlashdata([
                "pesan" => "Data Berhasil Dihapus",
                "icon" => "success",
            ]);
            return redirect()->to('admin/dpm/tampil');
        } else {
            session()->setFlashdata([
                "pesan" => "Data Tidak Ditemukan",
                "icon" => "error",
            ]);
        }
    }
    public function update()
    {
        $gambar = $this->request->getFile('foto');
        if ($gambar->getName() != "") {
            $data_lama = $this->modeldpm->find($this->request->getVar('id'));
            $gambar_lama = $data_lama['foto_dpm'];
            if ($gambar_lama != "1.jpg") {
                unlink('upload/' . $gambar_lama);
            }
            $ext = $gambar->getExtension();
            $filename = $this->request->getVar('nim') . '-' . $this->request->getVar('nama') . '.' . $ext;
            $gambar->move('upload/', $filename);
            $data = [
                "id"          => $this->request->getVar("id"),
                'nim'         => $this->request->getVar("nim"),
                'nama'        => $this->request->getVar("nama"),
                'prodi'       => $this->request->getVar("prodi"),
                'fakultas'    => $this->request->getVar("fakultas"),
                'visi'        => $this->request->getVar("visi"),
                'misi'        => $this->request->getVar("misi"),
                'nourut'      => $this->request->getVar("nourut"),
                'ormawa'      => $this->request->getVar("ormawa"),
                'foto_dpm'    => $filename,
            ];
        } else {
            $data = [
                "id"          => $this->request->getVar("id"),
                'nim'         => $this->request->getVar("nim"),
                'nama'        => $this->request->getVar("nama"),
                'prodi'       => $this->request->getVar("prodi"),
                'fakultas'    => $this->request->getVar("fakultas"),
                'visi'        => $this->request->getVar("visi"),
                'misi'        => $this->request->getVar("misi"),
                'nourut'      => $this->request->getVar("nourut"),
                'ormawa'      => $this->request->getVar("ormawa"),
            ];
        }
        $simpan = $this->modeldpm->save($data);
        if ($simpan) {
            session()->setFlashdata([
                "pesan" => "Data Berhasil Diupdate",
                "icon" => "success",
            ]);
            return redirect()->to('admin/dpm/tampil');
        } else {
            session()->setFlashdata([
                "pesan" => "Data Gagal Diupdate",
                "icon" => "error",
            ]);
            return redirect()->to('admin/dpm/tampil');
        }
    }
    public function create()
    {
        $gambar = $this->request->getfile('foto');
        if ($gambar->getName() != "") {
            $ext = $gambar->getExtension();
            $filename = $this->request->getVar('nim') . '-' . $this->request->getVar('nama') . '.' . $ext;
            $gambar->move('upload/', $filename);
            $data = [
                'nim'         => $this->request->getVar("nim"),
                'nama'        => $this->request->getVar("nama"),
                'prodi'       => $this->request->getVar("prodi"),
                'fakultas'    => $this->request->getVar("fakultas"),
                'visi'        => $this->request->getVar("visi"),
                'misi'        => $this->request->getVar("misi"),
                'nourut'      => $this->request->getVar("nourut"),
                'ormawa'      => $this->request->getVar("ormawa"),
                'foto_dpm'    => $filename,
            ];
        } else {
            $data = [
                'nim'         => $this->request->getVar("nim"),
                'nama'        => $this->request->getVar("nama"),
                'prodi'       => $this->request->getVar("prodi"),
                'fakultas'    => $this->request->getVar("fakultas"),
                'visi'        => $this->request->getVar("visi"),
                'misi'        => $this->request->getVar("misi"),
                'nourut'      => $this->request->getVar("nourut"),
                'ormawa'      => $this->request->getVar("ormawa"),
                'foto_dpm'    => '1.jpg'
            ];
        }
        $simpan = $this->modeldpm->save($data);
        if ($simpan) {
            session()->setFlashdata([
                "pesan" => "Data Berhasil Disimpan",
                "icon" => "success",
            ]);
            return redirect()->to('admin/dpm/tampil');
        } else {
            session()->setFlashdata([
                "pesan" => "Data Gagal Disimpan",
                "icon" => "error",
            ]);
            return redirect()->to('admin/dpm/tampil');
        }
    }
}
