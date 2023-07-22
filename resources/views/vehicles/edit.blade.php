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

            <div class="row">
                <div class="col-lg-6">
                    <label for="owner">Vehicle Owner : </label>
                    <input type="text" class="form-control" value="@php echo Auth::user()->name; @endphp" disabled><br>
                    <input type="hidden" name="owner" value="@php echo Auth::user()->name; @endphp">
                </div>
                <div class="col-lg-6">
                    <label for="plateNo">Vehicle Plate Number : </label>
                    <input type="text" name="vehicle_plate_no" id="vehicle_plate_no" class="form-control" value="{{ $edit_vehicle->vehicle_plate_no }}" disabled>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="regNo">Vehicle Registered Number : </label>
                    <input type="text" name="vehicle_registed_no" id="vehicle_registed_no" class="form-control" value="{{ $edit_vehicle->vehicle_registed_no }}" disabled>
                </div>
                <div class="col-lg-6">
                    <label for="chassisNo">Vehicle Chassis Number : </label>
                    <input type="text" name="vehicle_chassis_no" id="vehicle_chassis_no" class="form-control" value="{{ $edit_vehicle->vehicle_chassis_no }}" disabled>
                </div>
            </div>            
            <br><br>

        </form>
        
    </div>
@endsection