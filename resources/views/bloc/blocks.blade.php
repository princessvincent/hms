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
                        @if (session()->has('block'))
                            <div class="alert alert-success">
                                {{ session()->get('block') }}
                            </div>
                        @endif
                    </div>

                    <div>
                        @if (session()->has('blo'))
                            <div class="alert alert-danger">
                                {{ session()->get('blo') }}
                            </div>
                        @endif
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('Add Blocks Info') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route("blocks") }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="block_no" class="col-md-4 col-form-label text-md-end">{{ __('Block No') }}</label>

                                    <div class="col-md-6">
                                        <input id="block_no" type="text" class="form-control @error('block_no') is-invalid @enderror"
                                            name="block_no" value="{{ old('block_no') }}" required autocomplete="block_no" autofocus>

                                        @error('block_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Block Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="block_name" type="text"
                                            class="form-control @error('block_name') is-invalid @enderror" name="block_name"
                                            value="{{ old('block_name') }}" required autocomplete="block_name">

                                        @error('block_name')
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
                                            required autocomplete="description">

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
                                            {{ __('Add Blocks') }}
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
