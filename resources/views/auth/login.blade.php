@extends('layouts.app')

@section('content')
<div class="formContainer">
    <div class="circleShadow">
        <div class="circle">
            <div class="icon"></div>
        </div>
    </div>

    <div class="verticalSpace_30"></div>

    <h4>User Login</h4>

    <div class="verticalSpace_15"></div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input id="name" type="text" name="name" placeholder="Username" required autofocus>
        @if ($errors->has('name'))
            <span role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <div class="verticalSpace_5"></div>

        <input id="password" type="password" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <span role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="verticalSpace_15"></div>

        <div class="inputContainer">
            <input type="submit" value="{{ __('Login') }}">
        </div>
    </form>

    <div class="verticalSpace_40"></div>
</div>

<div class="verticalSpace_15"></div>

<a href="{{ route('register') }}">{{ __('Register') }}</a>
@endsection