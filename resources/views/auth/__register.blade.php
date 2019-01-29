@extends('layouts.app')

@section('content')
<div class="formContainer">
    <div class="circleShadow">
        <div class="circle">
            <div class="icon"></div>
        </div>
    </div>

    <div class="verticalSpace_30"></div>

    <h4>User Register</h4>

    <div class="verticalSpace_15"></div>
    <form action="">
        <input type="text" placeholder="Username">

        <div class="verticalSpace_5"></div>

        <input type="password" placeholder="Password">

        <div class="verticalSpace_5"></div>

        <input type="password" placeholder="Confirm Password">

        <div class="verticalSpace_15"></div>

        <div class="inputContainer">
            <input type="submit" value="{{ __('Register') }}">
        </div>
    </form>

    <div class="verticalSpace_40"></div>
</div>

<div class="verticalSpace_15"></div>

<a href="{{ route('login') }}">{{ __('Login') }}</a>
@endsection