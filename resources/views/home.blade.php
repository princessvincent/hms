
{{-- @unless (Auth::user()->role_as == 1)
    @extends('layouts.header')
@endunless
       --}}
{{-- @endif --}}
@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))
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

                    Total Bills
                    <h2>{{ $bills1 }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ url('billv') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                   Total Meals
                    <h2>{{ $meals1 }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link"  href="{{ url('mealv') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-4">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    Total Information
                    <h2>{{ $info }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ url('noticev') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
@endsection
