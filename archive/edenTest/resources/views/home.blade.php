@extends('templates.default')

@section('title')
Home
@endsection

@section('content')
    
    <h3>Welcome to Eden Escapades</h3>
    <p>Dating for the devilish and daring...</p>

    @if(Auth::check())
        <p>Hello, {{ Auth::user()->username }}</p>
        <a href="user/{{ Auth::user()->username }}">My Profile</a>
    @else
        <p>Hi Stranger, wanna <a href="{{ route('auth.signin') }}">sign in?</a></p>
	@endif
@endsection