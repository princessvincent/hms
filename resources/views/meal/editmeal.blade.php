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
        @if (session()->has('mea'))
            <div class="alert alert-success">
                {{ session()->get('mea') }}

            </div>
        @endif
    </div>

                    <div class="card">
                        <div class="card-header">{{ __('Update Meals') }}</div>

                        <div class="card-body">
                                  <form method="put" action='{{url("updateme/" .$meal->id)}}'>
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Student Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="student_name" type="text" class="form-control @error('student_name') is-invalid @enderror"
                                            name="student_name" value="{{  $meal->student_name }}" required autocomplete="student_name" autofocus>

                                        @error('student_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="meal"
                                        class="col-md-4 col-form-label text-md-end">{{ __('No of Meal') }}</label>

                                    <div class="col-md-6">
                                        <input id="no_ofmeal" type="text"
                                            class="form-control @error('no_ofmeal') is-invalid @enderror" name="no_ofmeal"
                                            value="{{  $meal->no_ofmeal}}" required autocomplete="no_ofmeal">

                                        @error('no_ofmeal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                

                                <div class="row mb-3">
                                    <label for="date"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="date" type="date"
                                            class="form-control @error('date') is-invalid @enderror" name="date"
                                            value="{{  $meal->date}}"     required autocomplete="new-date">

                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Meal') }}
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
