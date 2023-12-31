<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Home extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        if(!$this->session->get('username')){
            return redirect()->to(base_url('login'));
        }


        echo view('template/header');
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/home');
        echo view('template/footer');
    }
}
