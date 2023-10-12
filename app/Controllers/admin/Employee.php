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
        $data['validation'] = session('validation');

        $employees = new EmployeeModel();
        $data['pegawai'] = $employees->findAll();

        // define kriteria
        $data['masa_kerja'] = [1 => '0 Tahun',  2 => '1-2 Tahun',  3 => '2-5 Tahun',  4 => 'Diatas 5 Tahun'];
        $data['pendidikan'] = [5 => 'S1', 4 => 'D3', 3 => 'SMA/SMK', 2 => 'SMP', 1 => 'SD'];
        $data['keahlian'] = [4 => 'Sangat Baik', 3 => 'Baik', 2 => 'Cukup Baik'];
        $data['usia'] = [3 => '< 30 Tahun', 2 => '30-45 Tahun', 1 => '> 45 Tahun'];
        $data['kehadiran'] = [4 => '> 90%', 3 => '85-90%', 2 => '75-84%', 1 => '<75%'];
        $data['tanggung_jawab'] = [4 => 'Sangat Baik', 3 => 'Baik', 2 => 'Cukup Baik'];
        $data['prestasi_kerja'] = [4 => 'Sangat Baik', 3 => 'Baik', 2 => 'Cukup Baik'];
        $data['kejujuran'] = [4 => 'Sangat Baik', 3 => 'Baik', 2 => 'Cukup Baik'];


        echo view('template/header');
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/employee', $data);
        echo view('template/footer');
    }

    public function read($id)
    {
        $pegawai = new EmployeeModel();
        $data['pegawai'] = $pegawai->where('id', $id)->first();

        if (!$data['pegawai']) {
            // Handle the case when the user is not found
            return $this->response->setJSON(['error' => 'Pegawai Tidak Ditemukan!!!']);
        }

        // Return the user data as JSON
        return $this->response->setJSON($data['pegawai']);
    }

    public function create()
    {
        helper(['form', 'url']);
         //define validation
         $validation = $this->validate([
            'nik' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan NIK'
                ]
            ],
            'nama_pegawai'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Pegawai'
                ]
            ]
        ]);

        if(!$validation) {
            //render view with error validation message
            return redirect()->to('/admin/employee')->with('validation', $this->validator);
        } else {

             //model initialize
            $userModel = new EmployeeModel();
            
            //insert data into database
            $userModel->insert([
                'id' => $this->request->getPost('nik'),
                'nama_pegawai' => $this->request->getPost('nama_pegawai'),
                'usia' => $this->request->getPost('usia'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'keahlian' => $this->request->getPost('keahlian'),
                'masa_kerja' => $this->request->getPost('masa_kerja'),
                'kehadiran' => $this->request->getPost('kehadiran'),
                'tanggung_jawab' => $this->request->getPost('tanggung_jawab'),
                'kejujuran' => $this->request->getPost('kejujuran'),
                'prestasi_kerja' => $this->request->getPost('prestasi_kerja')
            ]);
            //flash message
            session()->setFlashdata('message', 'Pegawai Baru Berhasil Disimpan !!!');

            return redirect()->to(base_url('admin/employee'));
        }
    }

    public function update($id)
    {
        helper(['form', 'url']);
         //define validation
         $validation = $this->validate([
            'xnik' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan NIK'
                ]
            ],
            'xnama_pegawai'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Pegawai'
                ]
            ]
        ]);

        if(!$validation) {
            //render view with error validation message
            return redirect()->to('/admin/employee')->with('validation', $this->validator);
        } else {

             //model initialize
            $userModel = new EmployeeModel();
            
            //insert data into database
            $data = [
                'id' => $this->request->getPost('xnik'),
                'nama_pegawai' => $this->request->getPost('xnama_pegawai'),
                'usia' => $this->request->getPost('xusia'),
                'pendidikan' => $this->request->getPost('xpendidikan'),
                'keahlian' => $this->request->getPost('xkeahlian'),
                'masa_kerja' => $this->request->getPost('xmasa_kerja'),
                'kehadiran' => $this->request->getPost('xkehadiran'),
                'tanggung_jawab' => $this->request->getPost('xtanggung_jawab'),
                'kejujuran' => $this->request->getPost('xkejujuran'),
                'prestasi_kerja' => $this->request->getPost('xprestasi_kerja')
            ];

            $userModel->update($id, $data);

            //flash message
            session()->setFlashdata('message', 'Pegawai Baru Berhasil Diubah !!!');

            return redirect()->to(base_url('admin/employee'));
        }
    }

    public function delete($id)
    {
        $user = new EmployeeModel();
        $user->delete($id);
        session()->setFlashdata('message', 'Data Pegawai Berhasil Dihapus !!!');
        return redirect()->to(base_url('admin/employee'));
    }
}
