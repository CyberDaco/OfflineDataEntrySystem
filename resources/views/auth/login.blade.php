@extends('layouts.login.login')

@section('content')
<div class="container">
    <div class="row">
        <img class="img-responsive thumbnail" src="/img/user.jpg" alt="User" height="100%">
        <div class="col-sm-4 col-md-offset-4">
            <hr>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Username</label>
                    <input id="email" type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                    <input id="password" type="password" class="form-control input-lg" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
