<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="formContainer">
        <div class="circleShadow">
            <div class="circle">
                <div class="icon"></div>
            </div>
        </div>

        <div class="verticalSpace_30"></div>

        <h4>User Login</h4>

        <div class="verticalSpace_15"></div>
        <form action="">
            <input type="email" placeholder="Email">

            <div class="verticalSpace_5"></div>

            <input type="password" placeholder="Password">

            <div class="verticalSpace_5"></div>

            <div class="inputContainer">
                <input type="submit" value="{{ __('Login') }}">
            </div>
        </form>
    </div>

    <div class="verticalSpace_15"></div>

    <div class="link">
        <a href="#">Register</a> | <a href="#">Forgot Password</a>
    </div>
</body>
</html>