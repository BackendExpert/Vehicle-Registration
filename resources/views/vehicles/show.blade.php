@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/vehicles') }}"><button class="btn btn-primary">Back</button></a>
        <br><br>

        <h2>Vehicale Number {{ $view_vehicle->vehicle_plate_no }} Information</h2>
        <hr>
        <br>

        @if (Auth::user()->name == $view_vehicle->owner)
        <b>Owner</b> : {{ $view_vehicle->owner }} <br>
        <b>Vehicale Plate Number</b> : {{ $view_vehicle->vehicle_plate_no }} <br>
        <b>Vehicle Chassis Number</b> : {{ $view_vehicle->vehicle_chassis_no }} <br>
        <b>Vehicle Registered Number</b> : {{ $view_vehicle->vehicle_registed_no }} <br>
        <b>Vehicle Type</b> : {{ $view_vehicle->vehicle_type }} <br>
        <b>Vehicle Model</b> : {{ $view_vehicle->vehicle_model }} <br>
        <b>Vehicle Color</b> : {{ $view_vehicle->vehicle_color }} <br>
        <b>Seats</b> : {{ $view_vehicle->seats }}
        @endif

        <b>Owner</b> : {{ $view_vehicle->owner }} <br>
        <b>Vehicale Plate Number</b> : {{ $view_vehicle->vehicle_plate_no }} <br>
        <b>Vehicle Chassis Number</b> : ************************ <br>
        <b>Vehicle Registered Number</b> : ************************ <br>
        <b>Vehicle Type</b> : {{ $view_vehicle->vehicle_type }} <br>
        <b>Vehicle Model</b> : {{ $view_vehicle->vehicle_model }} <br>
        <b>Vehicle Color</b> : {{ $view_vehicle->vehicle_color }} <br>
        <b>Seats</b> : {{ $view_vehicle->seats }}

        <br><br>

        @if (Auth::user()->name == $view_vehicle->owner)
            <a href="{{ url('/vehicles/print/' . $view_vehicle->id) }}"><button class="btn btn-primary">Print</button></a>
        @endif

    </div>
@endsection