@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/vehicales') }}"><button class="btn btn-primary">Back</button></a>
        <br>
        <h3>Update Information on Vehicle Number {{ $edit_vehicle->vehicle_plate_no }}</h3>
    </div>
@endsection