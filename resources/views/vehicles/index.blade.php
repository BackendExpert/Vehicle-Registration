@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h3> <i class="fas fa-shuttle-van"></i> Registed Vehicles</h3>
        <hr>

        <a href="{{ url('create') }}"><button class="btn btn-success">Register New Vehicle</button></a>
        
    </div>
@endsection