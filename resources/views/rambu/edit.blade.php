@extends('layouts.admin')

@section('main-content')
    <h1>Edit Rambu</h1>

    <form action="{{ route('rambu.update', $rambu) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="nasional" {{ $rambu->jenis == 'nasional' ? 'selected' : '' }}>Nasional</option>
                <option value="provinsi" {{ $rambu->jenis == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                <option value="kota" {{ $rambu->jenis == 'kota' ? 'selected' : '' }}>Kota</option>
            </select>
        </div>
        <div class="form-group">
            <label for="namarambu">Nama Rambu</label>
            <input type="text" name="namarambu" id="namarambu" class="form-control" value="{{ $rambu->namarambu }}" required>
        </div>
        <div class="form-group">
            <label for="jenisrambu">Jenis Rambu</label>
            <input type="text" name="jenisrambu" id="jenisrambu" class="form-control" value="{{ $rambu->jenisrambu }}" required>
        </div>
        <div class="form-group">
            <label for="titikrambu">Titik Rambu (mp/jam)</label>
            <input type="number" name="titikrambu" id="titikrambu" class="form-control" value="{{ $rambu->titikrambu }}" required>
        </div>
        <div class="form-group">
            <label for="kondisirambu">Kondisi Rambu (mp/jam)</label>
            <input type="number" name="kondisirambu" id="kondisirambu" class="form-control" value="{{ $rambu->kondisirambu }}" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" value="{{ $rambu->tahun }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ $rambu->keterangan }}</textarea>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $rambu->lokasi }}">
        </div>
        <div class="form-group">
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file">
            @if($rambu->dokumentasi)
                <img src="{{ asset('storage/' . $rambu->dokumentasi) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection