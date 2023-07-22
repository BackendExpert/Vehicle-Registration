@extends('layouts.dash')

@if (Auth::user()->id != $member_profile->id)
<script>window.location = "/users";</script>
@endif

@section('content')
    <div class="admin-card">
        <h3><i class="fas fa-user-edit"></i> Update {{ $member_profile->name }}'s Profile</h3>
        <hr>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errors : </strong> You got Following Errors while validation this form<br>
                        <b>{{ $error }}</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        @endif

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
                    <input type="email" name="email" id="email" class="form-control" value="{{ $member_profile->email }}">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <label for="address">Address : </label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control" style="resize: none;">{{ $member_profile->address }}</textarea>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <label for="join">Join Date : </label>
                    <input type="text" class="form-control" value="{{ $member_profile->created_at }}" disabled>
                </div>
                <div class="col-lg-6">
                    <label for="join">Last Update At : </label>
                    <input type="text" class="form-control" value="{{ $member_profile->updated_at }}" disabled>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" value="Update Member's Information" class="btn btn-success" style="width: 100%;">
                </div>
            </div>
        
        </form>
    </div>
@endsection