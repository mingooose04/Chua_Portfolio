{{-- resources/views/home.blade.php --}}
@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="home">
    @if($profiles->isEmpty())
        <div class="alert alert-info">No profiles found.</div>
    @else
        @foreach($profiles as $profile)
            {{-- Welcome Section --}}
            <div class="container-fluid p-0 m-0">
                <div class="main-image p-0 m-0">
                    <img src="{{ $profile->avatar_url ?? asset('assets/ME.png') }}"
                        alt="{{ $profile->first_name }} {{ $profile->last_name }}">
                </div>

                <div class="main-text">
                        <h1>{{ $profile->first_name }} {{ $profile->last_name }}</h1>
                        <p>{{ $profile->title }}</p>
                    </div>
        </div>
            <div class="about">
                <h2 class=about-text>ABOUT ME</h2>
                <div class="row">
                    <div class="location col-6">
                        <ul>
                            <div id="carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="assets/uimockup3.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="assets/uimockup2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="assets/uimockup1.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                          <ul class="list-unstyled">
                                @if($profile->location)
                                    <li class="contact-item">
                                        <img src="{{ asset('assets/location.png') }}" 
                                            alt="Location icon" class="icon">
                                        <span>{{ $profile->location }}</span>
                                    </li>
                                @endif
                                @if($profile->email)
                                    <li class="contact-item">
                                        <img src="{{ asset('assets/mail.png') }}" 
                                            alt="Email icon" class="icon">
                                        <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a>
                                    </li>
                                @endif
                            </ul>

                        </ul>
                    </div>

                    <div class="bio col-6">
                        <p>{{ $profile->bio }}</p>
                    </div>

                </div>
            </div>
       

            {{-- Buttons Section --}}
            <div class="buttons text-center mb-5">
                <a href="{{ url('/projects') }}" class="btn me-2">View my projects</a>
                <a href="{{ url('/skills') }}" class="btn me-2">My Skills</a>
                <a href="{{ url('/contacts') }}" class="btn">Contact Me!</a>
            </div>
        @endforeach
    @endif
</div>
@endsection