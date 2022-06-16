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
        @if (session()->has('att'))
            <div class="alert alert-success">
                {{ session()->get('att') }}

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
                <div class="card-header fw-bold"><strong>{{ __('List of all Users') }}</strong></div>
             <div class="card-body">
             
                <table border="1" class="table">
                    <thead>
                        <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col" colspan="1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $us1 as $use)
                            <tr>
                                <td>{{  $use['name'] }}</td>
                                <td>{{  $use['email'] }}</td>
                               {{-- <td><a href="{{ url('show'),  $attens->id }}" class="btn btn-primary">View</a></td> --}}
                                <td> <a href="{{ url('editu', $use->id) }}" class="btn btn-success">Edit</a></td>
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
