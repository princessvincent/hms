

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
                        @if (session()->has('at'))
                            <div class="alert alert-success">
                                {{ session()->get('at') }}

                            </div>
                        @endif
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('Update Student Attendance') }}</div>

                        <div class="card-body">
                            <form method="put" action='{{ url('updateat/' . $atte->id) }}'>
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Student Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="student_name" type="text"
                                            class="form-control @error('student_name') is-invalid @enderror"
                                            name="student_name" value="{{ $atte->student_name }}" required
                                            autocomplete="student_name" autofocus>

                                        @error('student_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="date"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Attend Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="attend_date" type="date"
                                            class="form-control @error('attend_date') is-invalid @enderror"
                                            name="attend_date" value="{{ $atte->attend_date }}" required
                                            autocomplete="attend_date">

                                        @error('attend_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="absence"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Is Absence') }}</label>

                                    <div class="col-md-6">
                                        <input id="isAbsence" type="text"
                                            class="form-control @error('isAbsence') is-invalid @enderror" name="isAbsence"
                                            value="{{ $atte->isAbsence }}" required autocomplete="isAbsence">

                                        @error('isAbsence')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="leave"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Is Leave') }}</label>

                                    <div class="col-md-6">
                                        <input id="isleave" type="text"
                                            class="form-control @error('isleave') is-invalid @enderror" name="isleave"
                                            value="{{ $atte->isleave }}" required autocomplete="new-isleave">

                                        @error('isleave')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="remark"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Remark') }}</label>

                                    <div class="col-md-6">
                                        <input id="remark" type="text" class="form-control" name="remark" required
                                            value="{{ $atte->remark }}" autocomplete="remark">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Student Attendance') }}
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


</body>

</html>