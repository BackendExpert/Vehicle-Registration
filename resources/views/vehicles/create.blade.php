@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/vehicles') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2><i class="fas fa-shuttle-van"></i> Register New Vehicle</h2>
        <hr>
        <br><br>

        <form action="{{ url('/vehicles') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <label for="plateNo">Vehicle Plate Number : </label>
                    <input type="text" name="vehicle_plate_no" id="vehicle_plate_no" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="chassisNo">Vehicle Chassis Number : </label>
                    <input type="text" name="vehicle_chassis_no" id="vehicle_chassis_no" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="regNo">Vehicle Registered Number : </label>
                    <input type="text" name="vehicle_registed_no" id="vehicle_registed_no" class="form-control">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="vehiType">Vehicle Type : </label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-lg-6"></div>
            </div>

        </form>
    </div>
@endsection