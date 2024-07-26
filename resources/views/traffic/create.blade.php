@extends('layouts.admin')

@section('main-content')
    <h1>Tambah Traffic Data</h1>

    <form action="{{ route('traffic.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="jenis_traffic">Jenis Traffic</label>
            <select name="jenis_traffic" id="jenis_traffic" class="form-control" required>
                <option value="nasional">Nasional</option>
                <option value="provinsi">Provinsi</option>
                <option value="kota">Kota</option>
            </select>
        </div>
        <div class="form-group">
            <label for="namajalan">Nama Jalan</label>
            <input type="text" name="namajalan" id="namajalan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="statusjalan">Status Jalan</label>
            <input type="text" name="statusjalan" id="statusjalan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kapasitasjalan">Kapasitas Jalan (mp/jam)</label>
            <input type="number" name="kapasitasjalan" id="kapasitasjalan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="volumelalulintas">Volume Lalu Lintas (mp/jam)</label>
            <input type="number" name="volumelalulintas" id="volumelalulintas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kondisijalan">Kondisi Jalan</label>
            <select name="kondisijalan" id="kondisijalan" class="form-control" required>
                <option value="Baik">Baik</option>
                <option value="Cukup Baik">Cukup Baik</option>
                <option value="Buruk">Buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lebarjalan">Lebar Jalan (meter)</label>
            <input type="number" name="lebarjalan" id="lebarjalan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control">
        </div>
        <div class="form-group">
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection