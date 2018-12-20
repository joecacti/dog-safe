@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Dog Safe
                </div>

                <div class="links">
                    <a href="#">Invisible</a>
                    <a href="https://laracasts.com">Safe</a>
                    <a href="#">Secure</a>
                    <a href="#">Adaptable</a>
                    <a href="#">Reliable</a>
                    <a href="#">Convenient</a>
                </div>
            </div>
        </div>
@endsection
