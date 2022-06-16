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
                        @if (session()->has('bis'))
                            <div class="alert alert-success">
                                {{ session()->get('bis') }}

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
                <div class="card-header"><strong>{{ __('View Bills') }}</strong></div>

                <div class="card-body">

                               <table border="1" class="table">
                <thead>
                    <tr>
                        <th scope="col">Type of Bill</th>
                        <th scope="col">Bill To</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Bill Date</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $bills as $bill)
                        <tr>
                            <td>{{ $bill['bill_type'] }}</td>
                            <td>{{$bill['bill_to'] }}</td>
                            <td>{{$bill['amount'] }}</td>
                            <td>{{ $bill['bill_date'] }}</td>
                            {{-- <td><a href="{{ url('sho', $bill->id) }}" class="btn btn-primary">View</a></td> --}}
                            <td> <a href="{{ url('editbill', $bill->id) }}" class="btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="{{ url('deletebill/' . $bill->id) }}" method="POST">
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
