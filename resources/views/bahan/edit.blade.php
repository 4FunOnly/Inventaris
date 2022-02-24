@extends ('template.template')
@section ('content')
<form action="/bahan/{{$bahan->id}}/edit" method="POST">
    @csrf
    <div class="form-group">
        <label for="field-name">Nama</label>
        <input type="text" name="Nama" id="field-name" placeholder="Nama Bahan" value="{{$bahan->Nama}}">
        @error('Nama')
        <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="field-name">Kemasan</label>
        <input type="text" name="Kemasan" id="field-name" placeholder="Nama Kemasan Bahan" value="{{$bahan->Kemasan}}">
        @error('Kemasan')
        <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="field-name">Merk</label>
        <input type="text" name="Merk" id="field-name" placeholder="Merk" value="{{$bahan->Merk}}">
        @error('Merk')
        <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="field-name">Lokasi</label>
        <input type="text" name="Lokasi" id="field-name" placeholder="Lokasi" value="{{$bahan->Lokasi}}">
        @error('Lokasi')
        <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="field-name">Jumlah</label>
        <input type="number" name="Jumlah" id="field-name" placeholder="Jumlah" value="{{$bahan->Jumlah}}">
        @error('Jumlah')
        <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn-submit btn-grad">
        Update
    </button>
</form>
@endsection
