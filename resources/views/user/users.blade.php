@extends('layouts.app')
@section('content')

    <h1 style="margin-left:550px" >Users</h1>
    <table border="1" width="800" style="margin-left:250px">
        <thead>
        <tr>
        <th>ID</th>
        <th>User</th>
        <th>Slug</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        </tr>
        </thead>
        <tbody>
            @if (!empty($users))

            @foreach ($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->slug }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>

            </tr>

            @endforeach


            @endif

        </tbody>
    </table>

@endsection
