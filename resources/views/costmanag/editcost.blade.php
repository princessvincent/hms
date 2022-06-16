<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link href="../css/bootstrap.min.css" rel="stylesheet"> --}}
</head>

<body>
 @extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'));
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="col-md-8">
                           <div>
        @if (session()->has('cos'))
            <div class="alert alert-success">
                {{ session()->get('cos') }}

            </div>
        @endif
    </div>
                        <div class="card">
                            <div class="card-header">{{ __('Update Hostel Cost') }}</div>

                            <div class="card-body">
                               <form method="put" action='{{url("updatecos/" .$cost->id)}}'>
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="row mb-3">
                                        <label for="cost type"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Cost Type') }}</label>

                                        <div class="col-md-6">
                                            <input id="cost_type" type="text"
                                                class="form-control @error('cost_type') is-invalid @enderror"
                                                name="cost_type" value="{{ $cost->cost_type}}" required
                                                autocomplete="cost_type" autofocus>

                                            @error('cost_type')
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
                                                value="{{ $cost->amount }}" required autocomplete="amount">

                                            @error('amount')
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
                                                class="form-control @error('description') is-invalid @enderror"
                                             value="{{ $cost->description }}"   name="description" required autocomplete="description">

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="date"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Cost Date') }}</label>

                                        <div class="col-md-6">
                                            <input id="date" type="date"
                                                class="form-control @error('date') is-invalid @enderror" name="date"
                                              value="{{ $cost->date }}"  required autocomplete="date">

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
                                                {{ __('Update Cost') }}
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
