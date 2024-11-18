@extends('layouts.admin')

@section('main-content')
    <h1>Tambah Data Traffic Light</h1>

    <form action="{{ route('tlight.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="jenis">Status Jalan</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="nasional">Nasional</option>
                <option value="provinsi">Provinsi</option>
                <option value="kota">Kota</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lokasi">Nama Jalan</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenisapill">Jenis APILL</label>
            <input type="text" name="jenisapill" id="jenisapill" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="titikapill">Titik APILL</label>
            <input type="number" step="0.01" name="titikapill" id="titikapill" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kondisiapill">Kondisi APILL</label>
            <select name="kondisiapill" id="kondisiapill" class="form-control" required>
                <option value="Baik">Baik</option>
                <option value="Cukup Baik">Cukup Baik</option>
                <option value="Buruk">Buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection