@extends('layouts.admin')

@section('main-content')
    <h1>Rambu Data</h1>
    <a href="{{ route('rambu.create') }}" class="btn btn-primary mb-3">Tambah Data Rambu</a>

    <!-- <form action="{{ route('rambu.index') }}" method="GET" class="mb-3">
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
                <a href="{{ route('rambu.index') }}" class="btn btn-secondary mt-3">Reset</a>
            </div>
        </div>
    </form> -->

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <!-- <th>Nama Rambu</th> -->
                <th>Jalan</th>
                <th>Jenis Rambu</th>
                <th>Titik Rambu (mp/jam)</th>
                <th>Kondisi Rambu (mp/jam)</th>
                <th>Tahun</th>
                <!-- <th>Keterangan</th> -->
                <!-- <th>Lokasi</th> -->
                <th>Dokumentasi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rambus as $rambu)
                <tr>
                    <td>{{ $rambu->rambu_id }}</td>
                    <!-- <td>{{ $rambu->namarambu }}</td> -->
                    <td>{{ $rambu->jenis }}</td>
                    <!-- <td>{{ $rambu->jenisrambu }}</td> -->
                    <td>
                        <ul>
                            @foreach (explode("\n", $rambu->jenisrambu) as $poin)
                                <li>{{ $poin }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $rambu->titikrambu }}</td>
                    <td>{{ $rambu->kondisirambu }}</td>
                    <td>{{ $rambu->tahun }}</td>
                    <!-- <td>{{ $rambu->keterangan }}</td> -->
                    <!-- <td>{{ $rambu->lokasi }}</td> -->
                    <td>
                        @if($rambu->dokumentasi)
                            <img src="{{ asset('storage/' . $rambu->dokumentasi) }}" alt="Rambu Documentation" style="max-width: 100px; max-height: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <!-- <td>
                        @if (!empty(json_decode($rambu->dokumentasi)))
                            @foreach (json_decode($rambu->dokumentasi) as $foto)
                                <img src="{{ asset('storage/' . $foto) }}" alt="Rambu Documentation" style="max-width: 100px; margin-right: 10px;">
                            @endforeach
                        @else
                            No Images
                        @endif
                    </td> -->

                    <td>
                        <a href="{{ route('rambu.edit', $rambu) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('rambu.destroy', $rambu) }}" method="POST" style="display: inline-block;">
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