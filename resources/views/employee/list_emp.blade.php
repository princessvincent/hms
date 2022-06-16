@extends((!isset(Auth::user()->id))? 'layouts.app': ((Auth::user()->role_as == 1) ? 'layouts.head' : 'layouts.header'));
@section('content')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<div>
                        @if (session()->has('em'))
                            <div class="alert alert-success">
                                {{ session()->get('em') }}

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
                <div class="card-header"><strong>{{ __('List of Employees') }}</strong></div>

                <div class="card-body">

                    <table border="1" class="table">
                <thead>
                    <tr>
                        <th scope="col">FullName</th>
                        <th scope="col">Type of Employment</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Date of Join</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Block No</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Profile</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($employs as $employ)
                        <tr>
                            <td>{{ $employ['fullname'] }}</td>
                            <td>{{ $employ['employ_type'] }}</td>
                            <td>{{ $employ['gender'] }}</td>
                            <td>{{ $employ['dob'] }}</td>
                            <td>{{ $employ['doj'] }}</td>
                            <td>{{ $employ['phone_num'] }}</td>
                            <td>{{ $employ['email'] }}</td>
                            <td>{{ $employ['address'] }}</td>
                            <td>{{ $employ['salary'] }}</td>
                            <td>{{ $employ['block_no'] }}</td>
                            <td>{{ $employ['isActive'] }}</td>
                            <td>
                            <img src="{{ asset('uploads/student/' . $employ->profile) }}" width='50' height='50' class="img img-responsive" />
                            </td>
                            {{-- <td><a href="{{ url('sho', $employ->id) }}" class="btn btn-primary">View</a></td> --}}
                            <td> <a href="{{ url('editemp', $employ->id) }}" class="btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="{{ url('deleteem/' . $employ->id) }}" method="POST">
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
