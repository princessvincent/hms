@extends(!isset(Auth::user()->id) ? 'layouts.app' : (Auth::user()->role_as == 1 ? 'layouts.head' : 'layouts.header'))

@section('content')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <div>
        @if (session()->has('de'))
            <div class="alert alert-success">
                {{ session()->get('de') }}

            </div>
        @endif
    </div>

    <div>
        @if (session()->has('edi'))
            <div class="alert alert-success">
                {{ session()->get('edi') }}

            </div>
        @endif
    </div>




    <body>
        <div>

            <div class="card">
                <div class="card-header"><strong>{{ __('View Money Deposit') }}</strong></div>

                <div class="card-body">
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Student Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Deposit Date</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($deposits as $deposit)
                                <tr>
                                    <td>{{ $deposit['student_name'] }}</td>
                                    <td>{{ $deposit['amount'] }}</td>
                                    <td>{{ $deposit['deposit_date'] }}</td>
                                    {{-- <td><a href="{{ url('sho', $stud->id) }}" class="btn btn-primary">View</a></td> --}}
                                    <td> <a href="{{ url('editd', $deposit->id) }}" class="btn btn-secondary">Edit</a></td>
                                    <td>
                                        <form action="{{ url('deleted/' . $deposit->id) }}" method="POST">
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
