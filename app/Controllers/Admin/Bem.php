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
            ['kode' => 'BEMU', 'label' => 'Universitas'],
            ['kode' => 'BEMFT', 'label' => 'Teknik'],
            ['kode' => 'BEMFEB', 'label' => 'Ekonomi dan Bisnis'],
            ['kode' => 'BEMFKIP', 'label' => 'Keguruan dan Ilmu Pendidikan'],
            ['kode' => 'BEMFPSI', 'label' => 'Psikologi'],
            ['kode' => 'BEMFPT', 'label' => 'Pertanian'],
            ['kode' => 'BEMFH', 'label' => 'Hukum'],
        ];


        if ($id == null) {
            $data = [
                'button' => 'Simpan Data',
                'action' => site_url('admin/bem/create'),
                'ormawa' => $ormawa,
                'fakultas' => $fakultas,
                'row' => "",
            ];
        } else {
            $data = [
                'button' => 'Ubah Data',
                'action' => site_url('admin/bem/update'),
                'ormawa' => $ormawa,
                'fakultas' => $fakultas,
                'row' => $this->modelbem->find($id),
            ];
        }
        echo view('input/inputbem', $data);
    }

    public function tampil()
    {
        $kd = session('kode_akses');

        if ($kd == null) {
            return redirect()->to('admin/auth');
        }
        $data = [
            'row' => $this->modelbem->findAll()
        ];

        echo view('tampil/bem', $data);
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
                'nim_ketua' => $excel[1],
                'nama_ketua' => $excel[2],
                'prodi_ketua' => $excel[3],
                'fakultas_ketua' => $excel[4],
                'foto_ketua' => $excel[5],
                'nim_wakil' => $excel[6],
                'nama_wakil' => $excel[7],
                'prodi_wakil' => $excel[8],
                'fakultas_wakil' => $excel[9],
                'foto_wakil' => $excel[10],
                'visi' => $excel[11],
                'misi' => $excel[12],
                'nourut' => $excel[13],
                'ormawa' => $excel[14],
                'foto_paslon' => $excel[15],
            ];

            $this->modelbem->save($data);
        }

        return redirect()->to('admin/bem/tampil');
    }
    public function delete($id = null)
    {
        $data = $this->modelbem->find($id);
        if ($data) {
            $this->modelbem->delete($data);
            session()->setFlashdata([
                "pesan" => "Data Berhasil Dihapus",
                "icon" => "success",
            ]);
            return redirect()->to('admin/bem/tampil');
        } else {
            session()->setFlashdata([
                "pesan" => "Data Tidak Ditemukan",
                "icon" => "error",
            ]);
        }
    }

    protected $filename_ketua;
    protected $filename_pasangan;
    protected $filename_wakil;

    public function update()
    {
        $data_lama = $this->modelbem->find($this->request->getVar('id'));

        $foto_ketua = $this->request->getfile('foto_ketua');
        $foto_wakil = $this->request->getfile('foto_wakil');
        $foto_pasangan = $this->request->getfile('foto_pasangan');

        if ($foto_ketua->getName() == null) {
            $this->filename_ketua = $data_lama['foto_ketua'];
        } else {
            unlink('upload/' . $data_lama['foto_ketua']);
            //olah foto ketua
            $ext = $foto_ketua->getExtension();
            $this->filename_ketua = $this->request->getVar('nim_ketua') . '-' . $this->request->getVar('nama_ketua') . '.' . $ext;
            $foto_ketua->move('upload/', $this->filename_ketua);
        }

        if ($foto_wakil->getName() == null) {
            $this->filename_wakil = $data_lama['foto_wakil'];
        } else {
            unlink('upload/' . $data_lama['foto_wakil']);
            //olah foto wakil
            $ext = $foto_wakil->getExtension();
            $this->filename_wakil = $this->request->getVar('nim_wakil') . '-' . $this->request->getVar('nama_wakil') . '.' . $ext;
            $foto_wakil->move('upload/', $this->filename_wakil);
        }

        if ($foto_pasangan->getName() == null) {
            $this->filename_pasangan = $data_lama['foto_paslon'];
        } else {
            unlink('upload/' . $data_lama['foto_paslon']);
            //olah foto pasangan
            $ext = $foto_pasangan->getExtension();
            $this->filename_pasangan = 'Pasangan' . '-' . $this->request->getVar('nourut') . '.' . $ext;
            $foto_pasangan->move('upload/', $this->filename_pasangan);
        }


        $data = [
            "id"                => $this->request->getVar("id"),
            'nim_ketua'         => $this->request->getVar("nim_ketua"),
            'nama_ketua'        => $this->request->getVar("nama_ketua"),
            'prodi_ketua'       => $this->request->getVar("prodi_ketua"),
            'fakultas_ketua'    => $this->request->getVar("fakultas_ketua"),
            'foto_ketua'        => $this->filename_ketua,
            'nim_wakil'         => $this->request->getVar("nim_wakil"),
            'nama_wakil'        => $this->request->getVar("nama_wakil"),
            'prodi_wakil'       => $this->request->getVar("prodi_wakil"),
            'fakultas_wakil'    => $this->request->getVar("fakultas_wakil"),
            'foto_wakil'        => $this->filename_wakil,
            'visi'              => $this->request->getVar("visi"),
            'misi'              => $this->request->getVar("misi"),
            'nourut'            => $this->request->getVar("nourut"),
            'ormawa'            => $this->request->getVar("ormawa"),
            'foto_paslon'       => $this->filename_pasangan,
        ];

        $simpan = $this->modelbem->save($data);
        if ($simpan) {
            session()->setFlashdata([
                "pesan" => "Data Berhasil Diupdate",
                "icon" => "success",
            ]);
            return redirect()->to('admin/bem/tampil');
        } else {
            session()->setFlashdata([
                "pesan" => "Data Gagal Diupdate",
                "icon" => "error",
            ]);
            return redirect()->to('admin/bem/tampil');
        }
    }
    public function create()
    {
        $foto_ketua = $this->request->getfile('foto_ketua');
        $foto_wakil = $this->request->getfile('foto_wakil');
        $foto_pasangan = $this->request->getfile('foto_pasangan');
        //olah foto ketua
        $ext = $foto_ketua->getExtension();
        $filename_ketua = $this->request->getVar('nim_ketua') . '-' . $this->request->getVar('nama_ketua') . '.' . $ext;
        $foto_ketua->move('upload/', $filename_ketua);
        //olah foto wakil
        $ext = $foto_wakil->getExtension();
        $filename_wakil = $this->request->getVar('nim_wakil') . '-' . $this->request->getVar('nama_wakil') . '.' . $ext;
        $foto_wakil->move('upload/', $filename_wakil);
        //olah foto pasangan
        $ext = $foto_pasangan->getExtension();
        $filename_pasangan = 'Pasangan' . '-' . $this->request->getVar('nourut') . '.' . $ext;
        $foto_pasangan->move('upload/', $filename_pasangan);

        $data = [
            "id"                => $this->request->getVar("id"),
            'nim_ketua'         => $this->request->getVar("nim_ketua"),
            'nama_ketua'        => $this->request->getVar("nama_ketua"),
            'prodi_ketua'       => $this->request->getVar("prodi_ketua"),
            'fakultas_ketua'    => $this->request->getVar("fakultas_ketua"),
            'foto_ketua'        => $filename_ketua,
            'nim_wakil'         => $this->request->getVar("nim_wakil"),
            'nama_wakil'        => $this->request->getVar("nama_wakil"),
            'prodi_wakil'       => $this->request->getVar("prodi_wakil"),
            'fakultas_wakil'    => $this->request->getVar("fakultas_wakil"),
            'foto_wakil'        => $filename_wakil,
            'visi'              => $this->request->getVar("visi"),
            'misi'              => $this->request->getVar("misi"),
            'nourut'            => $this->request->getVar("nourut"),
            'ormawa'            => $this->request->getVar("ormawa"),
            'foto_paslon'       => $filename_pasangan,
        ];

        $simpan = $this->modelbem->save($data);
        if ($simpan) {
            session()->setFlashdata([
                "pesan" => "Data Berhasil Disimpan",
                "icon" => "success",
            ]);
            return redirect()->to('admin/bem/tampil');
        } else {
            session()->setFlashdata([
                "pesan" => "Data Gagal Disimpan",
                "icon" => "error",
            ]);
            return redirect()->to('admin/bem/tampil');
        }
    }
}
