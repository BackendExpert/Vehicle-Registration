{{-- <h1>

    {{ $member_profile->id }} <br>

    @php
        echo Auth::user()->id;
    @endphp

    @if (Auth::user()->id != $member_profile->id)
    <script>window.location = "/users";</script>
    @endif
    
</h1> --}}

@extends('layouts.dash')

@if (Auth::user()->id != $member_profile->id)
<script>window.location = "/users";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fas fa-user-edit"></i> Update Profile</h3>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <label for="Name">Name : </label>
                
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection