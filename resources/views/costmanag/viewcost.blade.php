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
                        @if (session()->has('co'))
                            <div class="alert alert-success">
                                {{ session()->get('co') }}

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
                <div class="card-header"><strong>{{ __('View Cost Info') }}</strong></div>

                <div class="card-body">

                               <table border="1" class="table">
                <thead>
                    <tr>
                        <th scope="col">Type of Cost</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col" colspan="3">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($costs as $cost)
                        <tr>
                            <td>{{ $cost['cost_type'] }}</td>
                            <td>{{ $cost['amount'] }}</td>
                            <td>{{ $cost['description'] }}</td>
                            <td>{{ $cost['date'] }}</td>
                            {{-- <td><a href="{{ url('sho', $cost->id) }}" class="btn btn-primary">View</a></td> --}}
                            <td> <a href="{{ url('editcos', $cost->id) }}" class="btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="{{ url('deleteco/' . $cost->id) }}" method="POST">
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
