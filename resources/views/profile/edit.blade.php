@extends('layouts.dash')

@if (Auth::user()->id != $member_profile->id)
<script>window.location = "/users";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fas fa-user-edit"></i> Update {{ $member_profile->name }}'s Profile</h3>
        <hr>

        <form action="{{ url('users/' .$member_profile->id) }}" method="POST"></form>
    </div>
@endsection