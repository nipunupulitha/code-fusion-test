@extends('layouts.app')
@section('content')

    <h1 style="margin-left:550px" >Properties</h1>

    <table border="1" width="800" style="margin-left:250px">
        <thead>
        <tr>
        <th>ID</th>
        <th>User</th>
        <th>Property type</th>
        <th>City</th>
        <th>Package</th>
        <th>Purpose</th>

        </tr>
        </thead>
        <tbody>
            @if (!empty($properties))

            @foreach ($properties as $propertie)

            <tr>
                <td>{{ $propertie->id }}</td>
                <td>{{ $propertie->userName }}</td>
                <td>{{ $propertie->property_typeType }}</td>
                <td>{{ $propertie->cityName }}</td>
                <td>{{ $propertie->packagePackage_name }}</td>
                <td>{{ $propertie->property_purposePurpose }}</td>



            </tr>

            @endforeach


            @endif

        </tbody>
    </table>

@endsection