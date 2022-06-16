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
  <div>
        @if (session()->has('se'))
            <div class="alert alert-success">
                {{ session()->get('se') }}

            </div>
        @endif
    </div>



                    <div class="card">
                        <div class="card-header">{{ __('Seat Allocation') }}</div>

                        <div class="card-body">
                            <form method="put" action='{{url("updateset/" .$seat->id)}}'>
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Student Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="student_name" type="text" class="form-control @error('student_name') is-invalid @enderror"
                                            name="student_name" value="{{ $seat->student_name }}" required autocomplete="student_name" autofocus>

                                        @error('student_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="block"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Block No') }}</label>

                                    <div class="col-md-6">
                                        <input id="block_no" type="text"
                                            class="form-control @error('block_no') is-invalid @enderror" name="block_no"
                                            value="{{ $seat->block_no}}" required autocomplete="block_no">

                                        @error('block_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="row mb-3">
                                    <label for="room"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Room No') }}</label>

                                    <div class="col-md-6">
                                        <input id="room_no" type="text"
                                            class="form-control @error('room_no') is-invalid @enderror" name="room_no"
                                            value="{{ $seat->room_no }}" required autocomplete="block_no">

                                        @error('room_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="rent"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Monthly Rent') }}</label>

                                    <div class="col-md-6">
                                        <input id="monthly_rent" type="text"
                                            class="form-control @error('monthly_rent') is-invalid @enderror" name="monthly_rent"
                                            value="{{ $seat->monthly_rent }}"  required autocomplete="monthly_rent">

                                        @error('monthly_rent')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Seat Allocated') }}
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
