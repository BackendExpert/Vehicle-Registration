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
                <input type="text" class="form-control" value="{{ $member_profile->name }}" disabled>
            </div>
            <div class="col-lg-6">
                <label for="email">Email : </label>
                <input type="text" class="form-control" value="{{ $member_profile->email }}" disabled>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-12">
                <label for="address">Address</label>
                <textarea cols="30" rows="10" class="form-control" style="resize: none;" disabled>{{ $member_profile->address }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <label for="join">Join Date : </label>
                <input type="text" class="form-control" value="{{ $member_profile->created_at }}">
            </div>
            <div class="col-lg-6">
                <label for="join">Last Update At : </label>
                <input type="text" class="form-control" value="{{ $member_profile->created_at }}">
            </div>
        </div>
    </div>
@endsection