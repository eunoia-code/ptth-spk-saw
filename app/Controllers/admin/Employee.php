<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;

class Employee extends BaseController
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

        $employees = new EmployeeModel();
        $data['pegawai'] = $employees->findAll();

        echo view('template/header');
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/employee', $data);
        echo view('template/footer');
    }
}
