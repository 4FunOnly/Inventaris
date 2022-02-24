<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index()
    {
        $bahan= Bahan::all();

        return view('bahan.index', ['bahan'=> $bahan]);
    }
    public function create()
    {
        return view('bahan.create');
    }
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'Nama'=>'required',
        //     'Kemasan'=>'required',
        //     'Merk'=>'required',
        //     'Jumlah'=>'required',
        //     'Lokasi'=>'required'
        // ]);
        
        // if ($validator->fails()) {
        //     session()->flash('warning', 'Cek kembali form anda');
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        Bahan::create([
            'Nama' => $request->Nama,
            'Kemasan' => $request->Kemasan,
            'Merk' => $request->Merk,
            'Lokasi'=> $request->Lokasi,
            'Jumlah' => $request->Jumlah,
        ]);
        return redirect('bahan.index');
    }
    public function edit($id)
    {
        $data= Bahan::find($id);
        return view('bahan.edit', ['bahan'=> $bahan]);
    }
    public function update(Bahan $bahan)
    {
        request()->validate([
            'Nama'=>'required',
            'Kemasan'=>'required',
            'Merk'=>'required',
            'Jumlah'=>'required',
            'Lokasi'=>'required'
        ]);
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
