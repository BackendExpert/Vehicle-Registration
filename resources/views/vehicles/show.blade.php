@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/vehicles') }}"><button class="btn btn-primary">Back</button></a>
        <hr>
        <br><br>

        <h2>Vehicale Number {{ $view_vehicle->vehicle_plate_no }} Information</h2>
    </div>
@endsection