{{-- @extends('layouts.app') --}}
{{-- @unless(Auth::user()->role_as == 1)
    @extends('layouts.header')
@endunless --}}
@extends(!isset(Auth::user()->id) ? 'layouts.app' : (Auth::user()->role_as == 1 ? 'layouts.head' : 'layouts.header'))

@section('title', 'Dashboard')

@section('content')
    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

    <div class="row mt-5">
        <div class="col-xl-3 col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">

                    Current Student
                    <h2>{{ $users }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ url('studentv') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    Current Admins
                    <h2>{{ $admin }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-4">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    Total Employees
                    <h2>{{ $employee }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ url('employv') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-4">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    Total Rooms
                    <h2>{{ $room }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ url('roomv') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @endsection --}}
