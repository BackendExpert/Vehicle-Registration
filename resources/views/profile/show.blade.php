<h1>

    {{ $member_profile->id }} <br>

    @php
        echo Auth::user()->id;
    @endphp

    @if (Auth::user()->id != $member_profile->id)
        
    @endif
    
</h1>