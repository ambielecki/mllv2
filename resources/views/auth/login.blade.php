@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Malden Little League - Login
@stop

@section('head')
    {{-- Add page specific css--}}
@stop

@section('content')

    {{-- Page Content --}}
    <div class="row">
        <div class="col l6 m9 s12">
            <div class="card">
                <div class="card-content">
                    <h3>Login</h3>
                    <div class="row">
                        <form class="col s12" action="/login" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="email">Email: </label>
                                    <input type="text" id="email" name="email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                        <br>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="password">Password: </label>
                                    <input type="password" id="password" name="password">
                                </div>
                                @if ($errors->has('password'))
                                    <br>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Remember me:</label>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
