@extends('templates.default')

@section('content')
<div id="signin-page">
    <h3 class="black left-align">{Sign in}</h3>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">
                
                <!-- Email -->
                <div class="form-group left-align {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label black">Your email address</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                
                <!-- Password -->
                <div class="form-group left-align {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password" class="control-label black">Enter your password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                
                <!-- Remember check box -->
                <div class="checkbox black left-align">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label> 
                </div>
                
                <!-- submit button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
                
                <!-- Laravel Token -->
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                
            </form>
            
        </div>
    </div>
</div>
@endsection