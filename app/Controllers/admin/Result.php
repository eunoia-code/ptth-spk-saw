<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CriteriaModel;
use App\Models\EmployeeModel;

class Result extends BaseController
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

        $data['result'] = $this->result(); 

        echo view('template/header');
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/result', $data);
        echo view('template/footer');
    }

    public function result(){
        $employees = new EmployeeModel();
        $data['employees'] = $employees->findAll();
        $criteria = new CriteriaModel();
        $data['criteria'] = $criteria->findAll();

        // Konversi data ke dalam bentuk $bobotKriteria
        $bobotKriteria = [];
        foreach ($data['criteria'] as $kriteria) {
            $bobotKriteria[str_replace(" ", "_", strtolower($kriteria['nama_kriteria']))] = [];
            $bobotKriteria[str_replace(" ", "_", strtolower($kriteria['nama_kriteria']))]['bobot'] = $kriteria['bobot'];
            $bobotKriteria[str_replace(" ", "_", strtolower($kriteria['nama_kriteria']))]['jenis'] = $kriteria['jenis'];
        }   

        // Inisialisasi variabel untuk menyimpan skor
        $skorPegawai = [];

        // Loop untuk menghitung skor setiap pegawai
        foreach ($data['employees'] as $pegawai) {
            $skor = 0;
            $krt = []; 
            $bbt = [];
            $nrm = 0;
            foreach ($bobotKriteria as $kriteria => $bobotInfo) {

                $bobot = $bobotInfo['bobot'];
                $jenisKriteria = $bobotInfo['jenis'];
                
                $nilai = $pegawai[$kriteria];
                // Perhitungan normalisasi untuk kriteria "benefit" (usia)
                if ($jenisKriteria === 'benefit') {
                    $nilaiNormalisasi = $nilai / max(array_column($data['employees'], $kriteria));
                    $krt[$kriteria] = "benefit => ".$nilai." / ".max(array_column($data['employees'], $kriteria))." = ".$nilaiNormalisasi ;
                    // if($pegawai['id']=="2011.01.01.0203")
                    //     echo $pegawai['nama_pegawai']." -> ".$kriteria." --> ".max(array_column($data['employees'], $kriteria))." => ".$nilai."<br>";
                } elseif ($jenisKriteria === 'cost') {
                    // Perhitungan untuk kriteria "cost"
                    $nilaiNormalisasi = min(array_column($data['employees'], $kriteria)) / $nilai;
                    $krt[$kriteria] = "cost => ".min(array_column($data['employees'], $kriteria))." / ". $nilai." = ".$nilaiNormalisasi;
                    // if($pegawai['id']=="2011.01.01.0203")
                    //     echo $pegawai['nama_pegawai']." -> ".$kriteria." --> ".max(array_column($data['employees'], $kriteria))." => ".$nilai."<br>";
                } //else {
                    // Kriteria "benefit" (usia) tidak perlu dinormalisasi
                    //$nilaiNormalisasi = $nilai;
                //}
                // if($pegawai['id']=="2011.01.01.0203")
                //     echo $nilaiNormalisasi ." xx ". $bobot;
                $bbt[$kriteria] = $bobot; $nrm = $nilaiNormalisasi;
                $skor += $nilaiNormalisasi * $bobot;
            }
            $skorPegawai[] = [
                'id' => $pegawai['id'], 
                'nama_pegawai' => $pegawai['nama_pegawai'], 
                'bobot_kriteria' => $krt, 
                'normalisasi' => $nrm, 
                'bobot' => $bbt, 
                'skor' => $skor
            ];
        }
        
        // echo(json_encode($skorPegawai));
        // die();
        
        
        // Mengurutkan pegawai berdasarkan skor
        usort($skorPegawai, array($this, 'sortBySkor'));
        
        return $skorPegawai;
    }

    // Fungsi untuk mengurutkan pegawai berdasarkan skor tertinggi ke terendah
    function sortBySkor($a, $b)
    {
        return $b['skor'] <=> $a['skor'];
    }

}
