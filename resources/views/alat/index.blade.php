@extends('template.template')
@sections('content')
<table class="table">
    <thead>
        <th>Nama</th>
        <th>Spesifikasi</th>
        <th>Jumlah</th>
        <th>Lokasi</th>
    </thead>
    <tbody>
        @foreach ($alat as $alat)
        <tr>
            <td>{{$alat->Nama}}</td>
            <td>{{$alat->Spesifikasi}}</td>
            <td>{{$alat->Jumlah}}</td>
            <td>{{$alat->Lokasi}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsections
