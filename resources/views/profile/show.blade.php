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

@section('content')
    <div class="admin-card">
        Hi all
    </div>
@endsection