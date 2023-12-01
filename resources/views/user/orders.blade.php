@extends('layouts.app')
@section('content')

    <h1 style="margin-left:550px" >Order</h1>
    <table border="1" width="800" style="margin-left:250px">
        <thead>
        <tr>
        <th>ID</th>
        <th>User</th>
        <th>Package</th>
        <th>Purchase date</th>
        <th>Expired date</th>
        </tr>
        </thead>
        <tbody>
            @if (!empty($orders))

            @foreach ($orders as $order)

            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->userName }}</td>
                <td>{{ $order->packagePackage_name }}</td>
                <td>{{ $order->purchase_date }}</td>
                <td>{{ $order->expired_date }}</td>

            </tr>

            @endforeach


            @endif

        </tbody>
    </table>

@endsection
