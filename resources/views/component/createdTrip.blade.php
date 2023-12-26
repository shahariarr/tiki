@extends('layout.app')
@section('content')
<div class="container">
    <h1>Create a Trip</h1>
    <form method="POST" action="{{route('trip.store')}}">
        @csrf
        <div class="form-group" >
            <label for="trip_name">Trip Name:</label>
            <input type="text" class="form-control" id="trip_name" name="trip_name"  required>
        </div>

        <div class="form-group" >
            <label for="from">From:</label>
            <input type="text" class="form-control" id="from" name="from"  required>
        </div>
        <div class="form-group">
            <label for="to">To:</label>
            <input type="text" class="form-control" id="to" name="to"  required>

        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Trip</button>
        </div>
    </form>
</div>
@endsection
