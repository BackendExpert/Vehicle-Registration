@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h3> <i class="fas fa-shuttle-van"></i> Registered Vehicles</h3>
        <hr>

        <a href="{{ url('vehicles/create') }}"><button class="btn btn-success"><i class="fas fa-plus"></i> Register New Vehicle</button></a>
        
        <br><br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Vehicle Plate Number</th>
                    <th>Owner</th>
                    <th>Vehicle Model</th>
                    <th>Vehicle Type</th>
                    <th>Added Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                        <td><b>{{ $loop->iteration }}</b></td>
                        <td>{{ $vehicle->vehicle_plate_no }}</td>
                        <td>{{ $vehicle->owner }}</td>
                        <td>{{ $vehicle->vehicle_model }}</td>
                        <td>{{ $vehicle->vehicle_type }}</td>
                        <td>{{ $vehicle->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection