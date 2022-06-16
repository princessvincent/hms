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
                <div class="card-header fw-bold"><strong>{{ __('List of Student Attendance') }}</strong></div>
             <div class="card-body">
             
                <table border="1" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Student Name</th>
                            <th scope="col">Attended Date</th>
                            <th scope="col">Is Absence</th>
                            <th scope="col">Is Leave</th>
                            <th scope="col">Remark</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($atten as $attens)
                            <tr>
                                <td>{{ $attens['student_name'] }}</td>
                                <td>{{ $attens['attend_date'] }}</td>
                                <td>{{ $attens['isAbsence'] }}</td>
                                <td>{{ $attens['isleave'] }}</td>
                                <td>{{ $attens['remark'] }}</td>
                               {{-- <td><a href="{{ url('show'),  $attens->id }}" class="btn btn-primary">View</a></td> --}}
                                <td> <a href="{{ url('editat', $attens->id) }}" class="btn btn-secondary">Edit</a></td>
                                <td>
                                    <form action="{{ url('deleteatte/' . $attens->id) }}" method="POST">
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
