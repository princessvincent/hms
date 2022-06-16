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
        @if (session()->has('st'))
            <div class="alert alert-success">
                {{ session()->get('st') }}

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
                <div class="card-header"><strong>{{ __('List of Admitted Student') }}</strong></div>

                <div class="card-body">

                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Fullname</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Name of Institution</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">profile</th>
                                <th scope="col" colspan="3">Action</th>

                            </tr>


                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student['fullname'] }}</td>
                                    <td>{{ $student['phone_num'] }}</td>
                                    <td>{{ $student['email'] }}</td>
                                    <td>{{ $student['nameof_insti'] }}</td>
                                    <td>{{ $student['gender'] }}</td>
                                    <td>{{ $student['date_of_birth'] }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/student/' . $student->profile_image) }}" width='50'
                                            height='50' class="img img-responsive" />
                                    </td>
                                    <td><a href="{{ url('show', $student->id) }}" class="btn btn-primary">View</a></td>
                                    <td> <a href="{{ url('editst', $student->id) }}" class="btn btn-secondary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ url('deletestu/' . $student->id) }}" method="POST">
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
