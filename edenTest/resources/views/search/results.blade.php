@extends('templates.default')

@section('title')
    Search
@endsection

@section('content')
    <h3>Your Search Results for {{ Request::input('query') }}</h3>

    @if (!$users->count())
        <p>No results found.</p>
        @else
    <div class="row">
        <div class="col-lg-12">
            @foreach ($users as $user)
                @include('templates/partials/userblock')
            @endforeach
        </div>
    </div>
    @endif
@endsection