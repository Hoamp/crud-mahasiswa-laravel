<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use PDO;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = mahasiswa::orderBy('id', 'desc')->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        mahasiswa::create($request->post());

        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        $mahasiswa->fill($request->post())->save();

        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy()
    {
    }
}
