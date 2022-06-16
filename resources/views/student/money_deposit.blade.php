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
                        @if (session()->has('deposit'))
                            <div class="alert alert-success">
                                {{ session()->get('deposit') }}
                            </div>
                        @endif
                    </div>

                    <div>
                        @if (session()->has('depo'))
                            <div class="alert alert-danger">
                                {{ session()->get('depo') }}
                            </div>
                        @endif
                    </div>


                    <div class="card">
                        <div class="card-header">{{ __('Money Deposit') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route("deposit") }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Student Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="student_name" type="text" class="form-control @error('student_name') is-invalid @enderror"
                                            name="student_name" value="{{ old('student_name') }}" required autocomplete="student_name" autofocus>

                                        @error('student_name')
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
                                        <input id="amount" type="text"
                                            class="form-control @error('amount') is-invalid @enderror" name="amount"
                                            value="{{ old('amount') }}" required autocomplete="amount">

                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="date"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Deposit Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="deposit_date" type="date"
                                            class="form-control @error('deposit_date') is-invalid @enderror" name="deposit_date"
                                            required autocomplete="new-deposit_date">

                                        @error('deposit_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Add Deposit') }}
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
