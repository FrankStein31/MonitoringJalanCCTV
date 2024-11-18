@extends('layouts.admin')

@section('main-content')
    <h1>Data Jalan</h1>
    <a href="{{ route('traffic.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <form action="{{ route('traffic.index') }}" method="GET" class="mb-3">
        <div class="card">
            <div class="card-header">
                Filter
            </div>
            <div class="card-body">
                <div class="form-group">
                    <select name="jenis_traffic" id="jenis_traffic" class="form-control" onchange="this.form.submit()">
                        <option value="">---</option>
                        <option value="nasional" {{ request('jenis_traffic') == 'nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="provinsi" {{ request('jenis_traffic') == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                        <option value="kota" {{ request('jenis_traffic') == 'kota' ? 'selected' : '' }}>Kota</option>
                    </select>
                </div>
                <a href="{{ route('traffic.index') }}" class="btn btn-secondary mt-3">Reset</a>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Jalan</th>
                <th>Status Jalan</th>
                <th>Kondisi Jalan</th>
                <th>Kapasitas Jalan (mp/jam)</th>
                <th>Volume Lalu Lintas (mp/jam)</th>
                <th>Lebar Jalan (meter)</th>
                <!-- <th>Lokasi</th> -->
                <th>Dokumentasi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($traffics as $traffic)
                <tr>
                    <td>{{ $traffic->traffic_id }}</td>
                    <td>{{ $traffic->namajalan }}</td>
                    <td>Jalan {{ $traffic->jenis_traffic }}</td>
                    <td>{{ $traffic->kondisijalan }}</td>
                    <td>{{ $traffic->kapasitasjalan }}</td>
                    <td>{{ $traffic->volumelalulintas }}</td>
                    <td>{{ $traffic->lebarjalan }}</td>
                    <!-- <td>{{ $traffic->lokasi }}</td> -->
                    <td>
                        @if($traffic->dokumentasi)
                            <img src="{{ asset('storage/' . $traffic->dokumentasi) }}" alt="Traffic Documentation" style="max-width: 100px; max-height: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('traffic.edit', $traffic) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('traffic.destroy', $traffic) }}" method="POST" style="display: inline-block;">
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