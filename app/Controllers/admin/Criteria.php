<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CriteriaModel;

class Criteria extends BaseController
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

        $criteria = new CriteriaModel();
        $data['criteria'] = $criteria->findAll();

        echo view('template/header');
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/criteria', $data);
        echo view('template/footer');
    }
}
