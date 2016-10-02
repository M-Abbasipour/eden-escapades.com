@extends('templates.default')

@section('title')
    Profile
@endsection

@section('content')
<div class="row">
    <div class="col-lg-5">
        <!-- User information and statuses -->
        @include('templates.partials.userblock')
        <hr>
    </div>
    
    <div class="col-lg-4 col-lg-offset-3">
        
        @if (Auth::user()->hasFriendRequestPending($user))
            <p>Waiting for {{ $user->getNameOrUsername() }} to accept your request.</p>
        @elseif (Auth::user()->hasFriendRequestReceived($user))
            <a href="{{ route('friends.accept', ['username' => $user->username]) }}" class="btn btn-primary">Accept Friend Request</a>
        @elseif (Auth::user()->isFriendsWith($user))
            <p>You and {{ $user->getNameOrUsername() }} are friends.</p>
        @elseif (Auth::user()->id !== $user->id)
            <a href="{{ route('friends.add', ['username' => $user->username]) }}" class="btn btn-primary">Add as friend</a>
        @endif
        
        <!-- Friends, friend requests -->
        <h4>{{ $user->getFirstNameOrUsername() }}'s friends</h4>
        
        @if (!$user->friends()->count())
            <p>{{ $user->getFirstNameOrUsername() }} has no friends</p>
        @else
            @foreach ($user->friends() as $user)
                @include('templates/partials/userblock')
            @endforeach
        @endif
    </div>
</div>

@endsection