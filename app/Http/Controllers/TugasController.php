<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function hal1() {
        return view ('tugas.halaman1');
    }
    public function hal2(){
        return view('tugas.halaman2');
    }
    public function hal3(){
        return view('tugas.halaman3');
    }
}
