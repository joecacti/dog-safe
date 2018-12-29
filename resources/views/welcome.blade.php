@extends('layouts.app')

@section('content')
<!--
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
-->
            <header>
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
                </video>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3">DogSafe</h1>
                        <h2>Invisible Secure Adaptable Reliable Convenient</h2>
                    </div>
                    </div>
                </div>
            </header>

            <section class="my-5" id="lead-in">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h2>Lead in</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque. Sed enim ut sem viverra. Sagittis vitae et leo duis ut. Ac odio tempor orci dapibus ultrices. Turpis egestas maecenas pharetra convallis posuere morbi leo. Pellentesque elit eget gravida cum. Amet massa vitae tortor condimentum lacinia quis. Faucibus interdum posuere lorem ipsum dolor. Quis vel eros donec ac. Lorem sed risus ultricies tristique nulla aliquet. Magna fringilla urna porttitor rhoncus dolor purus.</p>
                            <p>Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Euismod quis viverra nibh cras pulvinar mattis nunc sed blandit. A lacus vestibulum sed arcu non. Dignissim diam quis enim lobortis scelerisque fermentum dui. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Faucibus interdum posuere lorem ipsum dolor sit amet. Ultrices eros in cursus turpis massa tincidunt dui ut. Semper viverra nam libero justo laoreet. Ac tincidunt vitae semper quis. Ultrices dui sapien eget mi proin sed libero enim. Amet facilisis magna etiam tempor orci. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Nulla malesuada pellentesque elit eget. Fusce ut placerat orci nulla pellentesque dignissim enim sit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <hr />
                        </div>
                    </div>
                </div>
            </section>

            <section class="my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto testimonial">
                            <h2>Testimonials</h2>
                            <img src="/images/joey-boxer.jpg" alt="dog-safe-testimonial" class="mr-5 float-left">
                            <p>We are so pleased with the professionalism that DogSafe had when they came out to our home to install our invisible fence. DogSafe’s knowledge and capabilities put our minds at ease knowing that our three dogs are secure within the invisible fence. We love not having to use leashes to take our dogs outside anymore!
                            </p>
                            <p>- Jennifer L.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <hr />
                        </div>
                    </div>
                </div>
            </section>

            <section class="my-5" id="contact-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <contact-form></contact-form>
                        </div>
                    </div>
                </div>
            </section>

@endsection
