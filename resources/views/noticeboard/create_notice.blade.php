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
                            @if (session()->has('noti'))
                                <div class="alert alert-success">
                                    {{ session()->get('noti') }}
                                </div>
                            @endif
                        </div>

                        <div>
                            @if (session()->has('not'))
                                <div class="alert alert-danger">
                                    {{ session()->get('not') }}
                                </div>
                            @endif
                        </div>

                        <div class="card">
                            <div class="card-header">{{ __('Add Hostel Information') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route("noticeb") }}">
                                    @csrf

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="row mb-3">
                                        <label for="title"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text"
                                                class="form-control @error('title') is-invalid @enderror" name="title"
                                                value="{{ old('title') }}" required autocomplete="title" autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Description"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                        <div class="col-md-6">
                                            <input id="description" type="text"
                                                class="form-control @error('description') is-invalid @enderror"
                                                name="description" value="{{ old('description') }}" required
                                                autocomplete="description">

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
                                                {{ __('Add Information') }}
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
