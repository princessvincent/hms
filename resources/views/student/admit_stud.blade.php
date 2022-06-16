@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))  

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <div>
                        @if (session()->has('student'))
                            <div class="alert alert-success">
                                {{ session()->get('student') }}
                            </div>
                        @endif
                    </div>

                    <div>
                        @if (session()->has('stude'))
                            <div class="alert alert-danger">
                                {{ session()->get('stude') }}
                            </div>
                        @endif
                    </div>

                <div class="card">
                    <div class="card-header">{{ __('Admit Students') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route("students") }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('FullName') }}</label>

                                <div class="col-md-6">
                                    <input id="fullname" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="num"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_num" type="number"
                                        class="form-control @error('phone_num') is-invalid @enderror" name="phone_num"
                                        value="{{ old('phone_num') }}" required autocomplete="phone_num">

                                    @error('phone_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}" required autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inst"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name of Institution') }}</label>

                                <div class="col-md-6">
                                    <input id="nameof_insti" type="text"
                                        class="form-control @error('nameof_insti') is-invalid @enderror" name="nameof_insti"
                                        value="{{ old('nameof_insti') }}" required autocomplete="nameof_insti">

                                    @error('nameof_insti')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="program"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Program') }}</label>

                                <div class="col-md-6">
                                    <input id="program" type="text"
                                        class="form-control @error('program') is-invalid @enderror" name="program"
                                        value="{{ old('program') }}" required autocomplete="program">

                                    @error('program')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="batch"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Batch No') }}</label>

                                <div class="col-md-6">
                                    <input id="batch_no" type="text"
                                        class="form-control @error('batch_no') is-invalid @enderror" name="batch_no"
                                        value="{{ old('batch_no') }}" required autocomplete="batch_no">

                                    @error('batch_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">

                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dob"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date"
                                        class="form-control @error('date_of_birth') is-invalid @enderror"
                                        name="date_of_birth" required autocomplete="new-date_of_birth">

                                    @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="blood"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Blood Group') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('blood_group') is-invalid @enderror"
                                        name="blood_group">

                                        <option value="female">A+</option>
                                        <option value="male">A-</option>
                                        <option value="female">B+</option>
                                        <option value="male">B-</option>
                                        <option value="female">O+</option>
                                        <option value="male">O-</option>
                                        <option value="female">AB+</option>
                                        <option value="male">AB-</option>
                                    </select>

                                    @error('blood_group')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                              <div class="row mb-5">
                                <label for="nation"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nationality') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('nationality') is-invalid @enderror"
                                        name="nationality">
                                        @foreach ($country as $countrys)
                                        <option value="{{ $countrys->name }}">{{  $countrys->name }}</option>
                                           @endforeach
                                    </select>

                                    @error('nationality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="row mb-3">
                                <label for="nation id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIN') }}</label>

                                <div class="col-md-6">
                                    <input id="national_id" type="text"
                                        class="form-control @error('national_id') is-invalid @enderror" name="national_id"
                                        autocomplete="national_id">

                                    @error('national_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="passport"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Passport No') }}</label>

                                <div class="col-md-6">
                                    <input id="passport_no" type="text"
                                        class="form-control @error('passport_no') is-invalid @enderror" name="passport_no"
                                        autocomplete="passport_no">

                                    @error('passport_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="father"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Father Name') }}</label>

                                <div class="col-md-6">
                                    <input id="father_name" type="text"
                                        class="form-control @error('father_name') is-invalid @enderror" name="father_name"
                                        required autocomplete="father_name">

                                    @error('father_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="row mb-3">
                                <label for="father num"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Father Number') }}</label>

                                <div class="col-md-6">
                                    <input id="father_num" type="number"
                                        class="form-control @error('father_num') is-invalid @enderror" name="father_num"
                                        required autocomplete="father_num">

                                    @error('father_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mother"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mother Name') }}</label>

                                <div class="col-md-6">
                                    <input id="mother_name" type="text"
                                        class="form-control @error('mother_name') is-invalid @enderror" name="mother_name"
                                        required autocomplete="mother_name">

                                    @error('mother_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mother num"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mother Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mother_num" type="number"
                                        class="form-control @error('mother_num') is-invalid @enderror" name="mother_num"
                                        required autocomplete="mother_num">

                                    @error('mother_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="local guardian"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Local Guardian') }}</label>

                                <div class="col-md-6">
                                    <input id="local_guardian" type="text"
                                        class="form-control @error('local_guardian') is-invalid @enderror"
                                        name="local_guardian" required autocomplete="local_guardian">

                                    @error('local_guardian')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="guardian num"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Guardian Number') }}</label>

                                <div class="col-md-6">
                                    <input id="guardian_num" type="number"
                                        class="form-control @error('guardian_num') is-invalid @enderror"
                                        name="guardian_num" required autocomplete="guardian_num">

                                    @error('guardian_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="present add"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Present Address') }}</label>

                                <div class="col-md-6">
                                    <input id="present_address" type="text"
                                        class="form-control @error('present_address') is-invalid @enderror"
                                        name="present_address" required autocomplete="present_address">

                                    @error('present_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="permanent add"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Permanent Address') }}</label>

                                <div class="col-md-6">
                                    <input id="permanent_address" type="text"
                                        class="form-control @error('permanent_address') is-invalid @enderror"
                                        name="permanent_address" required autocomplete="permanent_address">

                                    @error('permanent_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profile"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Profile') }}</label>

                                <div class="col-md-6">
                                    <input id="profile_image" type="file"
                                        class="form-control @error('profile_image') is-invalid @enderror" name="profile_image"
                                        required autocomplete="profile_image">

                                    @error('profile_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Admit Student') }}
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
  {{-- --}}
