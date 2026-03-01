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
            <div class="container-fluid p-0 m-0 scroll-element">
                <div class="main-image p-0 m-0">
                    <img src="{{ $profile->avatar_url ?? asset('assets/ME.png') }}"
                        alt="{{ $profile->first_name }} {{ $profile->last_name }}">
                </div>

                <div class="main-text">
                        <h1>{{ $profile->first_name }} {{ $profile->last_name }}</h1>
                        <p>{{ $profile->title }}</p>
                    </div>
        </div>
            <div class="about scroll-element">
                <h2 class=about-text>About Me</h2>
                <div class="row">
                    <div class="location col-6">
                        <ul>
                            <div class="image-about">
                                <img src="{{ $profile->avatar_url ?? asset('assets/Mings.png') }}">
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
                                        <span>{{ $profile->email }}</span>
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
       
        @endforeach
    @endif
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.scroll-element');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target); // only animate once
            }
        });
    }, { threshold: 0.1 }); // trigger when 10% visible

    elements.forEach(el => observer.observe(el));
});
</script>
@endsection