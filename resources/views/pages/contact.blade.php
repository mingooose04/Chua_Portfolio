@extends('layouts.content')

@section('title', 'Contact')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Contact Information</h2>

    @if(isset($contacts) && $contacts->isNotEmpty())
        @php $contact = $contacts->first(); @endphp

        <div class="row g-4 justify-content-center">

            {{-- Email --}}
            <div class="col-12 col-md-6 scroll-element">
                <div class="card h-100 shadow p-3">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/mail.png') }}" 
                             alt="Email Icon" 
                             class="mb-2" 
                             style="width:40px; height:40px;">
                        <h6 class="card-subtitle mb-1">Email</h6>
                        <p class="card-text mb-0">{{ $contact->email }}</p>
                    </div>
                </div>
            </div>

            {{-- Phone --}}
            <div class="col-12 col-md-6 scroll-element">
                <div class="card h-100 shadow p-3">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/phone.png') }}" 
                             alt="Phone Icon" 
                             class="mb-2" 
                             style="width:40px; height:40px;">
                        <h6 class="card-subtitle mb-1">Phone</h6>
                        <p class="card-text mb-0">{{ $contact->phone }}</p>
                    </div>
                </div>
            </div>

            {{-- Facebook --}}
            <div class="col-12 col-md-6 scroll-element">
                <div class="card h-100 shadow p-3">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/facebook.png') }}" 
                             alt="Facebook Icon" 
                             class="mb-2" 
                             style="width:40px; height:40px;">
                        <h6 class="card-subtitle mb-1">Facebook</h6>
                        <p class="card-text mb-0">{{ $contact->facebook }}</p>
                    </div>
                </div>
            </div>

            {{-- LinkedIn --}}
            <div class="col-12 col-md-6 scroll-element">
                <div class="card h-100 shadow p-3">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/linkedin.png') }}" 
                             alt="LinkedIn Icon" 
                             class="mb-2" 
                             style="width:40px; height:40px;">
                        <h6 class="card-subtitle mb-1">LinkedIn</h6>
                        <p class="card-text mb-0">{{ $contact->linkedin }}</p>
                    </div>
                </div>
            </div>

            {{-- GitHub --}}
            <div class="col-12 col-md-6 scroll-element">
                <div class="card h-100 shadow p-3">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets/github.png') }}" 
                             alt="GitHub Icon" 
                             class="mb-2" 
                             style="width:40px; height:40px;">
                        <h6 class="card-subtitle mb-1">GitHub</h6>
                        <p class="card-text mb-0">{{ $contact->github }}</p>
                    </div>
                </div>
            </div>

        </div>

    @else
        <div class="alert alert-info">No contact information available.</div>
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