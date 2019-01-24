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
                <!--<div class="overlay"></div>-->
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="/images/video-placeholder.png">
                    <source src="/images/dogsafe-video.mp4" type="video/mp4">
                </video>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                    <!--<div class="w-100 text-white">
                        <h1 class="display-3">DogSafe</h1>
                        <h2>Invisible Secure Adaptable Reliable Convenient</h2>
                    </div>-->
                    </div>
                </div>
            </header>

            <section class="my-5" id="lead-in">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h1 class="title">Dedicated Pet Professionals</h1>
                            <p>At DogSafe, we provide professional installation, service, and training for underground pet containment systems. We are committed to superior customer service and we guarantee DogSafe Underground Fences will give your pet the freedom they love with the safety and peace of mind you’re looking for.</p>
                            <p>DogSafe Underground Fences provide a secure, reliable, adaptable, boundary for your pets. Our DogSafe Fence creates an invisible boundary to keep your pets in your yard and away from places you don’t want them, such as gardens, driveways, barns, and swimming pools.</p>
                            <div class="alert alert-success" role="alert">
                            <i class="fas fa-info-circle"></i> Installation normally takes a few hours and the training is uniquely humane to provide the best experience for you and your pet.
                            </div>
                            <ul class="fa-ul check-list">
                                <li><span class="fa-li" ><i class="fas fa-check"></i></span> DogSafe systems use rechargeable collars so you never need to buy costly batteries.</li>
                                <li><span class="fa-li" ><i class="fas fa-check"></i></span> Collar receivers are waterproof.</li>
                                <li><span class="fa-li" ><i class="fas fa-check"></i></span> Programmable for any size dog.</li>
                                <li><span class="fa-li" ><i class="fas fa-check"></i></span> Expandable for large yards over 10 acres.</li>
                                <li><span class="fa-li" ><i class="fas fa-check"></i></span> Lifetime Warranty.</li>
                                <li><span class="fa-li" ><i class="fas fa-check"></i></span> 100% Satisfaction Guarantee.</li>
                            </ul>
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
                            <h1 class="title">Testimonials</h1>
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
