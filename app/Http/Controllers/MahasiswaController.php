<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswas.index');
    }

    public function create()
    {
        return view('mahasiswas.create');
    }
}
