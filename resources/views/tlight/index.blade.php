@extends('layouts.admin')

@section('main-content')
    <h1>Traffic Light Data</h1>
    <a href="{{ route('tlight.create') }}" class="btn btn-primary mb-3">Tambah Data Traffic Light</a>

    <form action="{{ route('tlight.index') }}" method="GET" class="mb-3">
        <div class="card">
            <div class="card-header">
                Filter
            </div>
            <div class="card-body">
                <div class="form-group">
                    <select name="jenis" id="jenis" class="form-control" onchange="this.form.submit()">
                        <option value="">---</option>
                        <option value="nasional" {{ request('jenis') == 'nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="provinsi" {{ request('jenis') == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                        <option value="kota" {{ request('jenis') == 'kota' ? 'selected' : '' }}>Kota</option>
                    </select>
                </div>
                <a href="{{ route('tlight.index') }}" class="btn btn-secondary mt-3">Reset</a>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status Jalan</th>
                <th>Nama Jalan</th>
                <th>Jenis APILL</th>
                <th>Titik APILL</th>
                <th>Kondisi APILL</th>
                <th>Tahun</th>
                <th>Dokumentasi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tlights as $tlight)
                <tr>
                    <td>{{ $tlight->tlight_id }}</td>
                    <td>Jalan {{ $tlight->jenis }}</td>
                    <td>{{ $tlight->lokasi }}</td>
                    <td>{{ $tlight->jenisapill }}</td>
                    <td>{{ $tlight->titikapill }}</td>
                    <td>{{ $tlight->kondisiapill }}</td>
                    <td>{{ $tlight->tahun }}</td>
                    <td>
                        @if($tlight->dokumentasi)
                            <img src="{{ asset('storage/' . $tlight->dokumentasi) }}" alt="Traffic Light Documentation" style="max-width: 100px; max-height: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tlight.edit', $tlight) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tlight.destroy', $tlight) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection