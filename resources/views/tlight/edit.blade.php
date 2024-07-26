@extends('layouts.admin')

@section('main-content')
    <h1>Edit Traffic Light</h1>

    <form action="{{ route('tlight.update', $tlight) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="nasional" {{ $tlight->jenis == 'nasional' ? 'selected' : '' }}>Nasional</option>
                <option value="provinsi" {{ $tlight->jenis == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                <option value="kota" {{ $tlight->jenis == 'kota' ? 'selected' : '' }}>Kota</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenisapill">Jenis APILL</label>
            <input type="text" name="jenisapill" id="jenisapill" class="form-control" value="{{ $tlight->jenisapill }}" required>
        </div>
        <div class="form-group">
            <label for="titikapill">Titik APILL</label>
            <input type="number" step="0.01" name="titikapill" id="titikapill" class="form-control" value="{{ $tlight->titikapill }}" required>
        </div>
        <div class="form-group">
            <label for="kondisiapill">Kondisi APILL</label>
            <select name="kondisiapill" id="kondisiapill" class="form-control" required>
                <option value="Baik" {{ $tlight->kondisiapill == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Cukup Baik" {{ $tlight->kondisiapill == 'Cukup Baik' ? 'selected' : '' }}>Cukup Baik</option>
                <option value="Buruk" {{ $tlight->kondisiapill == 'Buruk' ? 'selected' : '' }}>Buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" value="{{ $tlight->tahun }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ $tlight->keterangan }}</textarea>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $tlight->lokasi }}">
        </div>
        <div class="form-group">
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file">
            @if($tlight->dokumentasi)
                <img src="{{ asset('storage/' . $tlight->dokumentasi) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection