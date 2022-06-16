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
        @if (session()->has('pa'))
            <div class="alert alert-success">
                {{ session()->get('pa') }}

            </div>
        @endif
    </div>


                <div class="card">
                    <div class="card-header">{{ __('Add Payments') }}</div>

                    <div class="card-body">
                       <form method="put" action='{{url("updatepay/" .$pay->id)}}'>
                            @csrf
                             <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Student Name') }}</label>

                                <div class="col-md-6">
                                    <input id="student_name" type="text" class="form-control @error('student_name') is-invalid @enderror"
                                        name="student_name" value="{{  $pay->student_name }}" required autocomplete="student_name" autofocus>

                                    @error('student_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Payment Date') }}</label>

                                <div class="col-md-6">
                                    <input id="payment_date" type="date" class="form-control @error('payment_date') is-invalid @enderror"
                                        name="payment_date" value="{{  $pay->payment_date }}" required autocomplete="payment_date">

                                    @error('payment_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                  

                            <div class="row mb-3">
                                <label for="paidby"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name of Depositor') }}</label>

                                <div class="col-md-6">
                                    <input id="paid_by" type="text"
                                        class="form-control @error('paid_by') is-invalid @enderror" name="paid_by"
                                        value="{{  $pay->paid_by }}" required autocomplete="paid_by	">

                                    @error('paid_by')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="row mb-3">
                                <label for="num"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Transaction Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="transaction_num" type="number"
                                        class="form-control @error('transaction_num') is-invalid @enderror" name="transaction_num"
                                     value="{{  $pay->transaction_num }}"   required autocomplete="transaction_num">

                                    @error('transaction_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                              <div class="row mb-3">
                                <label for="amount"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Amount Paid') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text"
                                        class="form-control @error('amount') is-invalid @enderror" name="amount"
                                        value="{{  $pay->amount }}" required autocomplete="amount">

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
                                        class="form-control @error('description') is-invalid @enderror" name="description"
                                       value="{{  $pay->description }}"  required autocomplete="description">

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
                                        {{ __('Update Payment Details') }}
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