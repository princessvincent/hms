<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link href="../css/bootstrap.min.css" rel="stylesheet"> --}}
</head>

<body>
@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))  

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

<div class="col-md-8">
                    <div>
                        @if (session()->has('rate'))
                            <div class="alert alert-success">
                                {{ session()->get('rate') }}
                            </div>
                        @endif
                    </div>

                    <div>
                        @if (session()->has('rat'))
                            <div class="alert alert-danger">
                                {{ session()->get('rat') }}
                            </div>
                        @endif
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('Rate Meal') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route("mealra") }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Meal Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="nameof_meal" type="text" class="form-control @error('nameof_meal') is-invalid @enderror"
                                            name="nameof_meal" value="{{ old('nameof_meal') }}" required autocomplete="nameof_meal" autofocus>

                                        @error('nameof_meal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="rate"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Rate') }}</label>

                                    <div class="col-md-6">
                                        <input id="rate" type="text"
                                            class="form-control @error('rate') is-invalid @enderror" name="rate"
                                            value="{{ old('rate') }}" required autocomplete="rate">

                                        @error('rate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Rate Meal') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- <script src="../js/bootstrap.min.js"></script> --}}
</body>

</html>
