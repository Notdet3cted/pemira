<?php

namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\modeladmin;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->modeladmin = new modeladmin;
    }

    public function index()
    {
        if (session('kode_akses')) {
            return redirect()->to('dashboard');
        }
        return view('adminlogin');
    }

    public function proses()
    {
        $req = $this->request->getVar();
        $data = $this->modeladmin->where(['kode_akses' => $req['kode_akses']])->first();

        if (!$data) {
            session()->setFlashdata([
                'pesan' => 'Anda Bukan Admin'
            ]);
            return redirect()->to('admin/auth');
        }

        if (password_verify($req['password'], $data['password'])) {

            $params = [
                'kode_akses'    => $data['kode_akses'],
                'role'      => $data['role'],


            ];

            session()->set($params);
            return redirect()->to("dashboard");
        }

        session()->setFlashdata([
            'pesan' => 'Password atau Username Salah!'
        ]);
        return redirect()->to("admin/auth");
    }

    public function logout()
    {
        session()->remove([
            'kode_akses', 'role'
        ]);
        return redirect()->to("admin/auth");
    }
}
