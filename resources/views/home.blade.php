@extends('layouts.admin')

@section('main-content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Rambu</h5>
                            <h2 class="mb-0">{{ $rambuCount }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-sign fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Traffic Light</h5>
                            <h2 class="mb-0">{{ $tlightCount }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-traffic-light fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-warning text-dark h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Traffic</h5>
                            <h2 class="mb-0">{{ $trafficCount }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-road fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection