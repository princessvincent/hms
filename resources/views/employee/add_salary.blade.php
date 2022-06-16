@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
  <div>
                            @if (session()->has('salary'))
                                <div class="alert alert-success">
                                    {{ session()->get('salary') }}
                                </div>
                            @endif
                        </div>

                        <div>
                            @if (session()->has('sala'))
                                <div class="alert alert-danger">
                                    {{ session()->get('sala') }}
                                </div>
                            @endif
                        </div>



                <div class="card">
                    <div class="card-header">{{ __('Add Salary Payment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route("salarys") }}">
                            @csrf
                            
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Employee Name') }}</label>

                                <div class="col-md-6">
                                    <input id="employ_name" type="text"
                                        class="form-control @error('employ_name') is-invalid @enderror" name="employ_name"
                                        value="{{ old('employ_name') }}" required autocomplete="employ_name" autofocus>

                                    @error('employ_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="monthYea"
                                    class="col-md-4 col-form-label text-md-end">{{ __('MonthYear Paid') }}</label>

                                <div class="col-md-6">
                                    <input id="monthYear_paid" type="text"
                                        class="form-control @error('monthYear_paid') is-invalid @enderror"
                                        name="monthYear_paid" value="{{ old('monthYear_paid') }}" required
                                        autocomplete="monthYear_paid">

                                    @error('monthYear_paid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text"
                                        class="form-control @error('amount') is-invalid @enderror" name="amount" required
                                        autocomplete="new-amount">

                                    @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="date"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Date Paid') }}</label>

                                <div class="col-md-6">
                                    <input id="paid_date" type="date"
                                        class="form-control @error('paid_date') is-invalid @enderror" name="paid_date"
                                        required autocomplete="paid_date">

                                    @error('paid_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Salary') }}
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
