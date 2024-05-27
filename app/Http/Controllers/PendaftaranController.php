<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:siswas',
            'no_wa' => 'required',
            'nik' => 'required|unique:siswas',
        ]);

        Siswa::create($request->all());

        return redirect()->route('pendaftaran.create')
                         ->with('success', 'Pendaftaran berhasil!');
    }
}

