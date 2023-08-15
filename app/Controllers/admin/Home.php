<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/home');
        echo view('template/footer');
    }
}
