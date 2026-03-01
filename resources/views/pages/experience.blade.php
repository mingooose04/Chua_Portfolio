{{-- resources/views/page/experience.blade.php --}}
@extends('layouts.content')

@section('title', 'Experience')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Experience</h2>

    @if(isset($experience) && $experience->isNotEmpty())
        <div class="row g-4">
            @foreach($experience as $exp)
                <div class="col-12">
                    <div class="card h-100 shadow scroll-element">
                        
                        {{-- Experience Image --}}
                        @if(!empty($exp->image))
                            <img src="{{ asset($exp->image) }}" 
                                 class="card-img-top" 
                                 alt="{{ $exp->title ?? 'Experience Image' }}" 
                                 style="height: 400px; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/default-experience.png') }}" 
                                 class="card-img-top" 
                                 alt="Default Experience Image" 
                                 style="height: 400px; object-fit: cover;">
                        @endif

                        <div class="card-body">
                            
                            {{-- Title --}}
                            <h5 class="card-title">{{ $exp->title ?? '—' }}</h5>

                            {{-- Organization --}}
                            <h6 class="card-subtitle mb-2 text-muted">{{ $exp->organization ?? '—' }}</h6>

                            {{-- Date --}}
                            <p class="card-text text-muted">
                                @if(!empty($exp->date))
                                    {{ \Illuminate\Support\Str::limit($exp->date, 20) }}
                                @else
                                    —
                                @endif
                            </p>

                            {{-- Description --}}
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit($exp->description ?? '', 220) }}
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">No experience entries found.</div>
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