<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alat= Alat::all();

        return view('alat.index', ['alat'=> $alat]);
    }
    public function create()
    {
        return view('alat.create');
    }
    public function store(Request $request)
    {
        Alat::create([
            'Nama' => $request->Nama,
            'Spesifikasi' => $request->Spesifikasi,
            'Merk' => $request->Merk,
            'Lokasi'=> $request->Lokasi,
            'Jumlah' => $request->Jumlah,
        ]);
        return redirect('alat.index');
    }
    public function edit(Alat $alat)
    {
        return view('alat.edit', ['alat'=> $alat]);
    }
    public function update(Alat $alat)
    {
        // request()->validate([
        //     'Nama'=>'required',
        //     'Kemasan'=>'required',
        //     'Merk'=>'required',
        //     'Jumlah'=>'required',
        //     'Lokasi'=>'required'
        // ]);
        $bahan->update([
            'Nama'=>request('Nama'),
            'Kemasan'=>request('Kemasan'),
            'Merk'=>request('Merk'),
            'Jumlah'=>request('Jumlah'),
            'Lokasi'=>request('Lokasi')
        ]);
        return redirect('bahan.index');
    }
}
