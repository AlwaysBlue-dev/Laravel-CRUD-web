<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <x-navbar />
    <table class="table">
        {{-- <pre>
            {{ print_r($register) }}
        </pre> --}}
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Qualification</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <!--blade template open-->
            @foreach ($register as $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->contact }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->qualification }}</td>
                    <td>{{ $value->dob }}</td>
                    <td>{{ $value->gender }}</td>
                    <td><a href="{{ route('register.edit', ['id' => $value->id]) }}"><button
                                class="btn btn-primary">Update</button></a>
                        <a href="{{ url('/view/delete/') }}/{{ $value->id }}"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
            <!--blade template close-->
        </tbody>
    </table>
</body>

</html>
