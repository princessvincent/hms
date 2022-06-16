@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

              <div>
        @if (session()->has('em'))
            <div class="alert alert-success">
                {{ session()->get('em') }}

            </div>
        @endif
    </div>

                <div class="card">
                    <div class="card-header">{{ __('Update Employee Info') }}</div>

                    <div class="card-body">
                        <form method="post" action='{{url("updatep/" .$employ->id)}}' enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('FullName') }}</label>

                                <div class="col-md-6">
                                    <input id="fullname" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        value="{{  $employ->fullname }}" required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="employ type"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Employee Type') }}</label>

                                <div class="col-md-6">
                                    <input id="employ_type" type="text"
                                        class="form-control @error('employ_type') is-invalid @enderror" name="employ_type"
                                        value="{{  $employ->employ_type }}" required autocomplete="employ_type">

                                    @error('employ_type')
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
                                        <option value="male">Male </option>
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
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"
                                        name="dob"   value="{{  $employ->dob }}" required autocomplete="new-dob">

                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="doj"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Date of Join') }}</label>

                                <div class="col-md-6">
                                    <input id="doj" type="date" class="form-control @error('doj') is-invalid @enderror"
                                        name="doj"  value="{{  $employ->doj }}" required autocomplete="doj">

                                    @error('doj')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_num" type="number"
                                        class="form-control @error('phone_num') is-invalid @enderror" name="phone_num"
                                       value="{{  $employ->phone_num }}"  required autocomplete="phone_num">

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
                                        name="email"  value="{{  $employ->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('House Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address" required
                                       value="{{  $employ->address }}"  autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="salary"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Salary') }}</label>

                                <div class="col-md-6">
                                    <input id="salary" type="text"
                                        class="form-control @error('salary') is-invalid @enderror" name="salary" required
                                     value="{{  $employ->salary }}"    autocomplete="salary">

                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="block no"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Block No') }}</label>

                                <div class="col-md-6">
                                    <input id="block_no" type="text"
                                        class="form-control @error('block_no') is-invalid @enderror" name="block_no"
                                      value="{{  $employ->block_no }}"   required autocomplete="block_no">

                                    @error('block_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="isActive"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Is Active') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('isActive') is-invalid @enderror" name="isActive">

                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                    @error('isActive')
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
                                    <input id="profile" type="file"
                                        class="form-control"  name="profile" accept="image/*">
                                    <img src="{{ asset('uploads/student/' . $employ->profile) }}" width='50'height='50' class="img img-responsive" />
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Employee Info') }}
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
