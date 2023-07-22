@extends('layouts.dash')

@if (Auth::user()->id != $member_profile->id)
<script>window.location = "/users";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fas fa-user-edit"></i> Update {{ $member_profile->name }}'s Profile</h3>
        <hr>

        <form action="{{ url('profile/' .$member_profile->id) }}" method="POST">
        
            @csrf
            @method("PATCH")

            <div class="row">
                <div class="col-lg-6">
                    <label for="name">Name : </label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $member_profile->name }}">
                </div>
                <div class="col-lg-6">
                    <label for="email">Email : </label>
                </div>
            </div>
        
        </form>
    </div>
@endsection