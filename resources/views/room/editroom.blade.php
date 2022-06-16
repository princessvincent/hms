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
        @if (session()->has('ro'))
            <div class="alert alert-success">
                {{ session()->get('ro') }}

            </div>
        @endif
    </div>


                    <div class="card">
                        <div class="card-header">{{ __('Update Rooms Information') }}</div>

                        <div class="card-body">
                            <form method="put" action='{{url("updatero/" .$room->id)}}'>
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="room" class="col-md-4 col-form-label text-md-end">{{ __('Room No') }}</label>

                                    <div class="col-md-6">
                                        <input id="room_no" type="text" class="form-control @error('room_no') is-invalid @enderror"
                                            name="room_no" value="{{ $room->room_no }}" required autocomplete="room_no" autofocus>

                                        @error('room_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="block_no"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Block No') }}</label>

                                    <div class="col-md-6">
                                        <input id="block_no" type="text"
                                            class="form-control @error('block_no') is-invalid @enderror" name="block_no"
                                            value="{{ $room->block_no }}" required autocomplete="block_no">

                                        @error('block_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="seat"
                                        class="col-md-4 col-form-label text-md-end">{{ __('No of Seat') }}</label>

                                    <div class="col-md-6">
                                        <input id="noOfseat" type="text"
                                            class="form-control @error('noOfseat') is-invalid @enderror" name="noOfseat"
                                            value="{{ $room->noOfseat }}"    required autocomplete="new-noOfseat">

                                        @error('noOfseat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                               <div class="row mb-3">
                                    <label for="description"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <input id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror" name="description"
                                             value="{{ $room->description }}"   required autocomplete="new-description">

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Room') }}
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
