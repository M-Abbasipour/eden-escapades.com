@extends('templates.default')

@section('content')

    <h1>This is an H1 HEADER</h1>
    <h2>This is an H2 HEADER</h2>
    <h3>This is an H3 HEADER</h3>
    <h4>This is an H4 HEADER</h4>
    <h5>This is an H5 HEADER</h5>
    <h6>This is an H6 HEADER</h6>
    <p>This is body text</p>

    <h1 class="h1">This is a bootstrap H1 HEADER</h1>
    <h2 class="h2">This is a bootstrap H2 HEADER</h2>
    <h3 class="h3">This is a bootstrap H3 HEADER</h3>
    <h4 class="h4">This is a bootstrap H4 HEADER</h4>
    <h5 class="h5">This is a bootstrap H5 HEADER</h5>
    <h6 class="h6">This is a bootstrap H6 HEADER</h6>
    <small>This is SMALL text</small>
    <p>This is paragraph text</p>
    <h2>This is <small>H2 SMALL</small> text</p></h2>
    <p>This is <mark>highlighted</mark> text</p>
    <p class="text-capitalize">This is to capitalise text</p>
    <p class="text-uppercase">This is Uppercased text.</p>

    <!-- Email -->
    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
        <label for="email" class="control-label">Your email address</label>
        <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
        @if($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>

@endsection