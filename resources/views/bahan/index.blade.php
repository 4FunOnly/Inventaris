@extends('template.template')
@section('content')
<div class="row d-flex">
        <table class="table">
            <thead>
                <th>Nama</th>
                <th>Kemasan</th>
                <th>Merk</th>
                <th>Jumlah</th>
                <th>Lokasi</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($bahan as $bahan)
                <tr>
                    <td>{{$bahan->Nama}}</td>
                    <td>{{$bahan->Kemasan}}</td>
                    <td>{{$bahan->Merk}}</td>
                    <td>{{$bahan->Jumlah}}</td>
                    <td>{{$bahan->Lokasi}}</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
   