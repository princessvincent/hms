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
                        @if (session()->has('roo'))
                            <div class="alert alert-success">
                                {{ session()->get('roo') }}

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
        <div class="card">
                <div class="card-header"><strong>{{ __('View Rooms') }}</strong></div>

                <div class="card-body">

                               <table border="1" class="table">
                <thead>
                    <tr>
                        <th scope="col">Room No</th>
                        <th scope="col">Block No</th>
                        <th scope="col">No of Seat</th>
                        <th scope="col">Description</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $rooms as  $room)
                        <tr>
                            <td>{{$room['room_no'] }}</td>
                            <td>{{ $room['block_no'] }}</td>
                            <td>{{$room['noOfseat'] }}</td>
                            <td>{{$room['description'] }}</td>
                            {{-- <td><a href="{{ url('sho',$room->id) }}" class="btn btn-primary">View</a></td> --}}
                            <td> <a href="{{ url('editro',$room->id) }}" class="btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="{{ url('deletero/' . $room->id) }}" method="POST">
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
        </div><div>
        </div>
    </body>

    </html>
@endsection
