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

    public function read($id)
    {
        $criteria = new CriteriaModel();
        $data['criteria'] = $criteria->where('id', $id)->first();

        if (!$data['criteria']) {
            // Handle the case when the user is not found
            return $this->response->setJSON(['error' => 'Kriteri Tidak Ditemukan!!!']);
        }

        // Return the user data as JSON
        return $this->response->setJSON($data['criteria']);
    }

    public function create()
    {
        helper(['form', 'url']);
         //define validation
         $validation = $this->validate([
            'nama_kriteria' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Kriteria'
                ]
            ],
            'jenis' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jenis Kriteria'
                ]
            ],
            'bobot' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Bobot Kriteria'
                ]
            ],
        ]);

        if(!$validation) {
            //render view with error validation message
            return redirect()->to('/admin/employee')->with('validation', $this->validator);
        } else {

             //model initialize
            $userModel = new CriteriaModel();
            
            //insert data into database
            $userModel->insert([
                'id' => uniqid(),
                'nama_kriteria' => $this->request->getPost('nama_kriteria'),
                'jenis' => $this->request->getPost('jenis'),
                'bobot' => $this->request->getPost('bobot')
            ]);
            //flash message
            session()->setFlashdata('message', 'Kriteria Baru Berhasil Disimpan !!!');

            return redirect()->to(base_url('admin/criteria'));
        }
    }

    public function update($id)
    {
        helper(['form', 'url']);
         //define validation
         $validation = $this->validate([
            'xnama_kriteria' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Kriteria'
                ]
            ],
            'xjenis' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jenis Kriteria'
                ]
            ],
            'xbobot' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Bobot Kriteria'
                ]
            ],
        ]);

        if(!$validation) {
            //render view with error validation message
            return redirect()->to('/admin/criteria')->with('validation', $this->validator);
        } else {

             //model initialize
            $userModel = new CriteriaModel();
            
            //insert data into database
            $data = [
                'nama_kriteria' => $this->request->getPost('xnama_kriteria'),
                'jenis' => $this->request->getPost('xjenis'),
                'bobot' => $this->request->getPost('xbobot')
            ];

            $userModel->update($id, $data);

            //flash message
            session()->setFlashdata('message', 'Kriteria Baru Berhasil Diubah !!!');

            return redirect()->to(base_url('admin/criteria'));
        }
    }

    public function delete($id)
    {
        $user = new CriteriaModel();
        $user->delete($id);
        session()->setFlashdata('message', 'Data Kriteria Berhasil Dihapus !!!');
        return redirect()->to(base_url('admin/criteria'));
    }
}
