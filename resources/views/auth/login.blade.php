@extends('layouts.app')

@section('content')

    <div class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card-group mb-0">
                        <div class="card p-2">
                            <div class="card-block">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <h1>Login</h1>
                                    <p class="text-muted">Sign In to your account</p>
                                    <div class="input-group mb-1">
                                    <span class="input-group-addon"><i class="icon-user"></i>
                                    </span>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            {{--<div class="col-md-6">--}}
                                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                                        </div>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('email') }}</strong><br /><br />
                                        </span>
                                    @endif
                                    <div class="input-group mb-2">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            {{--<div class="col-md-6">--}}
                                                <input id="password" type="password" class="form-control" placeholder="Password" name="password">

                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('password') }}</strong><br /><br />
                                        </span>
                                        @endif

                                    <div class="form-group">
                                        <div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-2">Login</button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                            {{--<button type="button" class="btn btn-link px-0">Forgot password?</button>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div style="width:14%">

                        </div>
                        <!--<div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">-->
                        <!--<div class="card-block text-center">-->
                        <!--<div>-->
                        <!--<h2>Sign up</h2>-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                        <!--<button type="button" class="btn btn-primary active mt-1">Register Now!</button>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
