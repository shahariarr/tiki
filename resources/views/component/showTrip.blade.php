@extends('layout.app')

@section('content')
<div class="container">
    <h1>Trip Details</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Trip Name</th>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
                <th>Avavliable Seats</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $trip)
            <tr>
                <td>{{ $trip->trip_name }}</td>
                <td>{{ $trip->from }}</td>
                <td>{{ $trip->to }}</td>
                <td>{{ $trip->date }}</td>
                <td>{{ $trip->date }}</td>
                <td><a href="{{route('book_trip',[$trip->id])}}" class="btn btn-primary">Book</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
