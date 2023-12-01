@extends('layouts.app')
@section('content')

    <h1 style="margin-left:550px" >Property aminity</h1>

    <table border="1" width="800" style="margin-left:250px">
        <thead>
        <tr>
        <th>ID</th>
        <th>Property</th>
        <th>Aminity</th>
        <th>Status</th>
        <th>Create date</th>
        <th>Updated date</th>
        </tr>
        </thead>
        <tbody>
            @if (!empty($property_aminities))

            @foreach ($property_aminities as $property_aminitie)

            <tr>
                <td>{{ $property_aminitie->id }}</td>
                <td>{{ $property_aminitie->propertieTitle }}</td>
                <td>{{ $property_aminitie->aminitiesAminity }}</td>
                <td>{{ $property_aminitie->status }}</td>
                <td>{{ $property_aminitie->created_at }}</td>
                <td>{{ $property_aminitie->updated_at }}</td>

            </tr>

            @endforeach


            @endif

        </tbody>
    </table>

@endsection
