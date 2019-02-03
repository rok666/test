@extends('layouts.app')

@section('content')

<main>
    <div class="left">
        <div class="left_top"></div>
        <div class="left_bottom">
            <div class="circleShadow">
                <div class="circle">
                    <div class="icon"></div>
                </div>
            </div>

            <div class="nameList_wrapper"></div>
        </div>
    </div>

    <div class="right">
        <div class="right_top">
            <div class="top_menu"></div>

            <div class="top_logout">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg class="icon_logout" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path d="M10.846,5.892l0,-4.733c0.007,-0.238 0.032,-0.303 0.081,-0.427c0.171,-0.431 0.5,-0.714 1.078,-0.732c0.024,0.001 0.048,0.002 0.072,0.002c0.223,0.021 0.259,0.042 0.354,0.079c0.432,0.171 0.715,0.501 0.733,1.078l0,4.741c3.731,0.53 7.048,3.516 7.773,7.291c1.087,5.668 -4.218,11.844 -10.596,10.662c-3.687,-0.683 -6.788,-3.888 -7.335,-7.616c-0.694,-4.736 2.943,-9.688 7.84,-10.345Zm2.318,2.343l0,4.556c-0.032,1.01 -1.678,1.621 -2.208,0.494c-0.068,-0.145 -0.102,-0.225 -0.11,-0.494l0,-4.545c-2.63,0.501 -4.934,2.632 -5.48,5.299c-0.621,3.032 1.131,6.395 4.003,7.61c3.16,1.338 7.235,-0.178 8.744,-3.308c1.544,-3.202 0.051,-7.539 -3.247,-9.08c-0.541,-0.253 -1.113,-0.431 -1.702,-0.532Z" style="fill-rule:nonzero;"/></svg>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            </div>

            <div class="top_welcome">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                
                <h5>Welcome <span class="bolder">{{ Auth::user()->name }}</span>!</h5>
            </div>
        </div>
        <div class="right_bottom">
            <div id="app" class="detail_wrapper">
                <task-form></task-form>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</main>
                
@endsection
