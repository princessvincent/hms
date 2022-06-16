@extends(!isset(Auth::user()->id) ? 'layouts.app' : (Auth::user()->role_as == 1 ? 'layouts.head' : 'layouts.header'))

@section('content')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="card">
            <div class="card-header"><strong>{{ __('Show Student Details') }}</strong></div>

            <div class="card-body">

                <table border="1" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Fullname</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Name of Institution</th>
                            <th scope="col"> Program</th>
                            <th scope="col"> Batch No</th>
                            <th scope="col"> Gender</th>
                            <th scope="col"> Date of Birth</th>
                            <th scope="col"> Blood Group</th>
                            <th scope="col"> Nationality</th>
                            <th scope="col"> NIN</th>
                            <th scope="col"> Passport No</th>
                            <th scope="col">Father's Name</th>
                            <th scope="col">Father's Number</th>
                            <th scope="col">Mother's Name</th>
                            <th scope="col">Mother's Number</th>
                            <th scope="col">Local Guardian</th>
                            <th scope="col">Guardian Number</th>
                            <th scope="col">Permanent Address</th>
                            <th scope="col">Present Address</th>
                            <th scope="col">profile</th>
                            {{-- <th scope="col" colspan="3">Action</th> --}}

                        </tr>


                    </thead>
                    <tbody>

                        <tr>
                            <td> {{ $show->fullname }} </td>
                            <td>{{ $show->phone_num }}</td>
                            <td>{{ $show->email }}</td>
                            <td>{{ $show->nameof_insti }}</td>
                            <td>{{ $show->program }}</td>
                            <td>{{ $show->batch_no }}</td>
                            <td>{{ $show->gender }}</td>
                            <td>{{ $show->date_of_birth }}</td>
                            <td>{{ $show->blood_group }}</td>
                            <td>{{ $show->nationality }}</td>
                            <td>{{ $show->national_id }}</td>
                            <td>{{ $show->passport_no }}</td>
                            <td>{{ $show->father_name }}</td>
                            <td>{{ $show->father_num }}</td>
                            <td>{{ $show->mother_name }}</td>
                            <td>{{ $show->mother_num }}</td>
                            <td>{{ $show->local_guardian }}</td>
                            <td>{{ $show->guardian_num }}</td>
                            <td>{{ $show->permanent_address }}</td>
                            <td>{{ $show->present_address }}</td>
                            {{-- <td>{{ $show->father_num }}</td> --}}
                            <td>
                                <img src="{{ asset('uploads/student/' . $show->profile_image) }}" width='50'
                                    height='50' class="img img-responsive" />
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>

                                                {{-- </div> --}}
    </body>

    </html>
@endsection
