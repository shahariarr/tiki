@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card bg-primary text-white">
                <div class="card-body" >
                    <h5 class="card-title">Total Trips</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Customers</h5>
                    <p class="card-text">11</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card bg-warning text-dark">
                <div class="card-body">
                    <h5 class="card-title">Sold Tickets</h5>
                    <p class="card-text">6</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Locations</h5>
                    <p class="card-text">4</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
