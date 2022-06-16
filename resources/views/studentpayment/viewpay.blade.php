{{-- @unless (Auth::user()->role_as == 1)
    @extends('layouts.header')
@endunless
       --}}


@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'))
@section('content')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<div>
                        @if (session()->has('pay'))
                            <div class="alert alert-success">
                                {{ session()->get('pay') }}

                            </div>
                        @endif
                    </div>

                     <div>
                        @if (session()->has( 'edi'))
                            <div class="alert alert-success">
                                {{ session()->get( 'edi') }}

                            </div>
                        @endif
                    </div>
   



    <body>
        <div>
        <div class="card">
                <div class="card-header"><strong>{{ __('View Payment Details') }}</strong></div>

                <div class="card-body">

                    <table border="1" class="table">
                <thead>
                    <tr>
                        <th scope="col">Student Name</th>
                        <th scope="col">Date of Payment</th>
                        <th scope="col">Paid By</th>
                        <th scope="col">Transaction Number</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($studs as $stud)
                        <tr>
                            <td>{{ $stud['student_name'] }}</td>
                            <td>{{ $stud['payment_date'] }}</td>
                            <td>{{ $stud['paid_by'] }}</td>
                            <td>{{ $stud['transaction_num'] }}</td>
                            <td>{{ $stud['amount'] }}</td>
                            <td>{{ $stud['description'] }}</td>
                            {{-- <td><a href="{{ url('sho', $stud->id) }}" class="btn btn-primary">View</a></td> --}}
                            <td> <a href="{{ url('editpa', $stud->id) }}" class="btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="{{ url('deletepay/' . $stud->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>




                </div>
            </div>
        </div>
           
        </div>
    </body>

    </html>
@endsection
