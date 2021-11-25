<?php

namespace App\Controllers;

use App\Models\ModelPemilih;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->modelpemilih = new Modelpemilih;
    }

    public function index()
    {
        if (session('id_pemilih')) {
            return redirect()->to('home/dpmu');
        }
        return view('login');
    }

    public function proses()
    {
        $req = $this->request->getVar();
        $data = $this->modelpemilih->where(['nim' => $req['nim']])->first();

        if (!$data) {
            session()->setFlashdata([
                'pesan' => 'Anda tidak terdaftar'
            ]);
            return redirect()->to('auth');
        }

        if (password_verify($req['password'], $data['password'])) {
            if ($data['status'] != 0) {

                session()->setFlashdata([
                    'pesan' => 'Anda Sudah Memilih!'
                ]);
                return redirect()->to('auth');
            }

            $params = [
                'id_pemilih'    => $data['id'],
                'fakultas'      => $data['fakultas'],
                'pemilih'      => $data['nama'],

            ];

            session()->set($params);
            return redirect()->to("home/dpmu/" . $data['id']);
        }

        session()->setFlashdata([
            'pesan' => 'Password atau Username Salah!'
        ]);
        return redirect()->to("auth");
    }

    public function logout()
    {
        session()->remove([
            'id_pemilih', 'fakultas', 'pemilih'
        ]);
        return redirect()->to("auth");
    }
}
