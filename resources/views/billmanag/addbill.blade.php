
{{-- @endif --}}
@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link href="../css/bootstrap.min.css" rel="stylesheet"> --}}
</head>
<body>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

            <div>
            @if(session()->has('bill'))
            <div class="alert alert-success">
            {{ session()->get('bill') }}
            </div>
            @endif
            </div>

             <div>
            @if(session()->has('bil'))
            <div class="alert alert-danger">
            {{ session()->get('bil') }}
            </div>
            @endif
            </div>
                <div class="card">
                    <div class="card-header">{{ __('Bills') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route("addbill")}}">
                            @csrf
                            {{-- @csrf_field  --}}
                            {{-- {{ method_field('POST') }} --}}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row mb-3">
                                <label for="bill" class="col-md-4 col-form-label text-md-end">{{ __('Bill Type') }}</label>

                                <div class="col-md-6">
                                    <input id="bill_type" type="text" class="form-control @error('bill_type') is-invalid @enderror"
                                        name="bill_type" value="{{ old('bill_type') }}" required autocomplete="bill_type" autofocus>

                                    @error('bill_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bill_to"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bill To') }}</label>

                                <div class="col-md-6">
                                    <input id="bill_to" type="bill_to" class="form-control @error('bill_to') is-invalid @enderror"
                                        name="bill_to" value="{{ old('bill_to') }}" required autocomplete="bill_to">

                                    @error('bill_to')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           <div class="row mb-3">
                                <label for="amount"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" type="amount" class="form-control @error('amount') is-invalid @enderror"
                                        name="amount" value="{{ old('amount') }}" required autocomplete="amount">

                                    @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="date"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bill Date') }}</label>

                                <div class="col-md-6">
                                    <input id="bill_date" type="date"
                                        class="form-control @error('bill_date') is-invalid @enderror" name="bill_date"
                                        required autocomplete="bill_date">

                                     @error('bill_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Bill') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
{{-- <script src="../js/bootstrap.min.js"></script> --}}
</body>
</html>
@endsection