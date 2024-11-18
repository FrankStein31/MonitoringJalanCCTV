@extends('layouts.admin')

@section('main-content')
    <h1>Tambah Data Rambu</h1>

    <form action="{{ route('rambu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- <div class="form-group">
            <label for="jenis">Jalan</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="nasional">Nasional</option>
                <option value="provinsi">Provinsi</option>
                <option value="kota">Kota</option>
            </select>
        </div> -->

        <div class="form-group">
            <label for="jenis">Jalan</label>
            <select name="jenis" id="jenis" class="form-control">
                <option value="">-- Pilih Jalan --</option>
                @foreach ($trafficData as $traffic)
                    <option value="{{ $traffic->namajalan }}">{{ $traffic->namajalan }}</option>
                @endforeach
            </select>
        </div>

        <!-- <div class="form-group">
            <label for="namarambu">Nama Rambu</label>
            <input type="text" name="namarambu" id="namarambu" class="form-control" required>
        </div> -->
        <!-- <div class="form-group">
            <label for="jenisrambu">Jenis Rambu</label>
            <input type="text" name="jenisrambu" id="jenisrambu" class="form-control" required>
        </div> -->
        <div class="form-group">
            <label for="jenisrambu">Jenis Rambu</label>
            <textarea name="jenisrambu" id="jenisrambu" class="form-control" rows="5" placeholder="Pisahkan poin dengan baris baru" required></textarea>
        </div>

        <div class="form-group">
            <label for="titikrambu">Titik Rambu (mp/jam)</label>
            <input type="number" name="titikrambu" id="titikrambu" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kondisirambu">Kondisi Rambu (mp/jam)</label>
            <input type="number" name="kondisirambu" id="kondisirambu" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" required>
        </div>
        <!-- <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div> -->
        <!-- <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control">
        </div> -->
        <div class="form-group">
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file">
        </div>
        <!-- <div>
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi[]" id="dokumentasi" class="form-control-file" multiple>
        </div> -->
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection