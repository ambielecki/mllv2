@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Malden Little League - Register
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
                    <h3>Register</h3>
                    <div class="row">
                        <form class="col s12" action="/register" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col l6 m9 s12">
                                    <label for="first_name">First Name: </label>
                                    <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}">
                                    @if ($errors->has('first_name'))
                                        <br>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l6 m9 s12">
                                    <label for="last_name">Last Name: </label>
                                    <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}">
                                    @if ($errors->has('last_name'))
                                        <br>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l6 m9 s12">
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
                                <div class="input-field col l6 m9 s12">
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
                                <div class="input-field col l6 m9 s12">
                                    <label for="password_confirmation">Confirm Password: </label>
                                    <input type="password" id="password_confirmation" name="password_confirmation">
                                    @if ($errors->has('password_confirmation'))
                                        <br>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Register
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
