@extends('layouts.admin')

@section('main-content')
<h1>Lokasi CCTV</h1>
    <div class="row">
        <div class="col-md-12">
            <!-- Sidebar with CCTV content -->
            <iframe src="{{ $cctvUrl }}" width="100%" height="850" frameborder="0"></iframe>
        </div>
    </div>
@endsection