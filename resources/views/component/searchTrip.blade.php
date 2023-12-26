@extends('layout.app')

@section('content')
<div class="container">
    <h1>Booking a Trip</h1>

    <form method="POST" action="{{route('get_trip')}}">
        @csrf

        <div class="form-group">
            <label for="from">From:</label>
            <select class="form-control" id="from" name="from">
                <option value="dhaka">Dhaka</option>
                <option value="Comilla">Comilla</option>
                <option value="Chittagong">Chittagong</option>
                <option value="cox'sbazaar">Cox's Bazaar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="to">To:</label>
            <select class="form-control" id="to" name="to">
                <option value="dhaka">Dhaka</option>
                <option value="Comilla">Comilla</option>
                <option value="chittagong">Chittagong</option>
                <option value="cox'sbazaar">Cox's Bazaar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Book Trip</button>
        </div>
    </form>
</div>
</div>


@endsection

