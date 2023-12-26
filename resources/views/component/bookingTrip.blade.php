@extends('layout.app')

@section('content')
<div class="container">
    <h1>Booking a Trip</h1>

    <form method="POST" action="/bookTrip">
        @csrf
        <div class="form-group" >
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number"  required>
        </div>
        <div class="form-group">
            <label for="from">From:</label>
            <select class="form-control" id="from" name="from">
                <option value="dhaka">Dhaka</option>
                <option value="comilla">Comilla</option>
                <option value="chittagong">Chittagong</option>
                <option value="cox'sbazaar">Cox's Bazaar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="to">To:</label>
            <select class="form-control" id="to" name="to">
                <option value="dhaka">Dhaka</option>
                <option value="comilla">Comilla</option>
                <option value="chittagong">Chittagong</option>
                <option value="cox'sbazaar">Cox's Bazaar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="seats">Seats:</label>
            <input type="number" class="form-control" id="seats" name="seats" min="0" max="1" required>
        </div>
        <div class="form-group">
            <label for="orders">Seat Number:</label>
            <input type="number" class="form-control" id="orders" name="orders" min="1" max="36" required>
        </div>
        <div class="form-group">
            <label for="trip">Trip Name:</label>
            <select class="form-control" id="trip" name="trip">
                <option value="Dhaka-Cox's Bazaar">Dhaka-Cox's Bazaar</option>
                <option value="Dhaka-Comilla">Dhaka-Comilla</option>
                <option value="Dhaka-Chittagong">Dhaka-Chittagong</option>
                <option value="Comilla-Chittagong">Comilla-Chittagong</option>
                <option value="Comilla-Cox's Bazaar">Comilla-Cox's Bazaar</option>
                <option value="Chittagong-Cox's Bazaar">Chittagong-Cox's Bazaar</option>

            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Book Trip</button>
        </div>
    </form>
</div>
</div>


@endsection

