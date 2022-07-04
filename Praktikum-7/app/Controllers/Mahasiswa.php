<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index(){
        //objek model mahasiswa
        $this->mhs1 = new MahasiswaModel();
        $this->mhs2 = new MahasiswaModel();
        $this->mhs3 = new MahasiswaModel();

        //memberi nilai pada objek
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Bagas Alief Mindarto";
        $this->mhs1->nim = "21153";
        $this->mhs1->gender = "L";
        $this->mhs1->tmp_lahir = "Jakarta";
        $this->mhs1->tgl_lahir = "12 Maret 2001";
        $this->mhs1->ipk = 3.83;

        $this->mhs2->id = 2;
        $this->mhs2->nama = "M. Abdurrahman Al Faruqi";
        $this->mhs2->nim = "21152";
        $this->mhs2->gender = "L";
        $this->mhs2->tmp_lahir = "Bogor";
        $this->mhs2->tgl_lahir = "6 Maret 2002";
        $this->mhs2->ipk = 3.78;

        $this->mhs3->id = 3;
        $this->mhs3->nama = "Ahmad Alfian Surya Gunawan";
        $this->mhs3->nim = "11110";
        $this->mhs3->gender = "L";
        $this->mhs3->tmp_lahir = "Jakarta";
        $this->mhs3->tgl_lahir = "15 April 2001";
        $this->mhs3->ipk = 3.86;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        //return view dan mengirim sebuah data array
        return view('mahasiswa/index', $data);
    }
}