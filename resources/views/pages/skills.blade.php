{{-- resources/views/skills/index.blade.php --}}
@extends('layouts.content')

@section('title', 'Skills')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">My Skills</h2>
        <small class="text-muted">Updated {{ $skills->count() }} skills</small>
    </div>

    <div class="row g-4">
        @forelse($skills as $skill)
            @php
                switch(strtolower($skill->level)) {
                    case 'beginner':
                        $levelClass = 'badge-beginner';
                        break;
                    case 'intermediate':
                        $levelClass = 'badge-intermediate';
                        break;
                    case 'advanced':
                        $levelClass = 'badge-advanced';
                        break;
                    default:
                        $levelClass = 'bg-secondary';
                }
            @endphp

            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 shadow scroll-element">
                    
                    {{-- Skill Image --}}
                    @if(!empty($skill->image))
                        <img src="{{ asset($skill->image) }}" 
                             class="card-img-top" 
                             alt="{{ $skill->name }}" 
                             style="height: 200px; object-fit: cover;">
                    @else
                        <img src="{{ asset('assets/default-skill.png') }}" 
                             class="card-img-top" 
                             alt="Default Skill Image" 
                             style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body d-flex flex-column">
                        
                        {{-- Skill Name --}}
                        <h5 class="card-title">{{ $skill->name }}</h5>

                        {{-- Level Badge --}}
                        <span class="badge {{ $levelClass }} mb-2">
                            {{ ucfirst($skill->level) }}
                        </span>

                        {{-- Description --}}
                        @if(!empty($skill->description))
                            <p class="card-text">{{ $skill->description }}</p>
                        @else
                            <p class="card-text text-muted">No description provided</p>
                        @endif

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">
                No skills found
            </div>
        @endforelse
    </div>
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