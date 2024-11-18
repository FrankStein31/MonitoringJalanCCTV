@extends('layouts.admin')

@section('main-content')
    <h1>Edit Traffic Data</h1>

    <form action="{{ route('traffic.update', $traffic) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenis_traffic">Status Jalan</label>
            <select name="jenis_traffic" id="jenis_traffic" class="form-control" required>
                <option value="nasional" {{ $traffic->jenis_traffic == 'nasional' ? 'selected' : '' }}>Nasional</option>
                <option value="provinsi" {{ $traffic->jenis_traffic == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                <option value="kota" {{ $traffic->jenis_traffic == 'kota' ? 'selected' : '' }}>Kota</option>
            </select>
        </div>
        <div class="form-group">
            <label for="namajalan">Nama Jalan</label>
            <input type="text" name="namajalan" id="namajalan" class="form-control" value="{{ $traffic->namajalan }}" required>
        </div>
        <!-- <div class="form-group">
            <label for="statusjalan">Status Jalan</label>
            <input type="text" name="statusjalan" id="statusjalan" class="form-control" value="{{ $traffic->statusjalan }}" required>
        </div> -->
        <div class="form-group">
            <label for="kapasitasjalan">Kapasitas Jalan (mp/jam)</label>
            <input type="number" name="kapasitasjalan" id="kapasitasjalan" class="form-control" value="{{ $traffic->kapasitasjalan }}" required>
        </div>
        <div class="form-group">
            <label for="volumelalulintas">Volume Lalu Lintas (mp/jam)</label>
            <input type="number" name="volumelalulintas" id="volumelalulintas" class="form-control" value="{{ $traffic->volumelalulintas }}" required>
        </div>
        <div class="form-group">
            <label for="kondisijalan">Kondisi Jalan</label>
            <select name="kondisijalan" id="kondisijalan" class="form-control" value="{{ $traffic->kondisijalan }}" required>
                <option value="Baik" {{ $traffic->kondisijalan == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Cukup Baik" {{ $traffic->kondisijalan == 'Cukup Baik' ? 'selected' : '' }}>Cukup Baik</option>
                <option value="Buruk" {{ $traffic->kondisijalan == 'Buruk' ? 'selected' : '' }}>Buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lebarjalan">Lebar Jalan (meter)</label>
            <input type="number" name="lebarjalan" id="lebarjalan" class="form-control" value="{{ $traffic->lebarjalan }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ $traffic->keterangan }}</textarea>
        </div>
        <!-- <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $traffic->lokasi }}">
        </div> -->
        <div class="form-group">
            <label for="dokumentasi">Dokumentasi</label>
            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file">
            @if($traffic->dokumentasi)
                <img src="{{ asset('storage/' . $traffic->dokumentasi) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection