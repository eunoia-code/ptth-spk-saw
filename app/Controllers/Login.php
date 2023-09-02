<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{    
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('login'));
    }

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                $this->session->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin'));
            } else {
                $this->session->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            $this->session->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
}