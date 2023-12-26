{{-- @extends('layout.app')

@section('content')
<div class="container">
    <h1>Bus Seat Allocation</h1>
    <form method="POST" action="{{route('book_trip_store')}}">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        @for ($i = 1; $i <= 40; $i++)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{ $i }}" id="seat{{ $i }}" name="seats[]">
            <label class="form-check-label" for="seat{{ $i }}">
                Seat {{ $i }}
            </label>
        </div>
        @endfor
        <button type="submit" class="btn btn-primary mt-3">Allocate Seats</button>
    </form>
</div>
@endsection --}}

@extends('layout.app')

@section('content')
<div class="container">
    <h1>Bus Seat Allocation</h1>
    <form method="POST" action="{{route('book_trip_store')}}">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="mobile_number">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
        </div>

        @for ($i = 1; $i <= 40; $i++)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{ $i }}" id="seat{{ $i }}" name="seats[]">
            <label class="form-check-label" for="seat{{ $i }}">
                Seat {{ $i }}
            </label>
        </div>
        @endfor
        <button type="submit" class="btn btn-primary mt-3">Allocate Seats</button>
    </form>
</div>
@endsection
