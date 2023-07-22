@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/vehicles') }}"><button class="btn btn-primary">Back</button></a>
        <br><br>
        <h3>Update Information on Vehicle Number {{ $edit_vehicle->vehicle_plate_no }}</h3>
        <hr>
        <br><br>

        <form action="{{ url('vehicles/' .$edit_vehicle->id) }}" method="POST">
            @csrf
            @method("PATCH")

            
        </form>
        
    </div>
@endsection