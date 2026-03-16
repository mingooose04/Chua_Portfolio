{{-- resources/views/projects/index.blade.php --}}
@extends('layouts.content')

@section('title', 'Projects')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">My Projects</h2>
        <small class="text-muted">{{ $projects->count() ?? 0 }} projects</small>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Add New Project</a>
    </div>

    @if(isset($projects) && $projects->isNotEmpty())
        <div class="row g-4">
            @foreach($projects as $project)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow scroll-element">

                        {{-- Single thumbnail per project --}}
                        @if(!empty($project->image))
                            <img src="{{ $project->image }}"
                                 class="card-img-top" 
                                 alt="{{ $project->title }}">
                        @else
                            <div class="bg-light d-flex align-items-center justify-content-center" style="height:180px;">
                                <span class="text-muted">No image</span>
                            </div>
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-1">{{ $project->title ?? $project->name ?? 'Untitled' }}</h5>
                            <p class="text-muted mb-2 small">{{ $project->tech_stack ?? '' }}</p>

                            <p class="card-text mb-3">
                                {{ \Illuminate\Support\Str::limit($project->description ?? '', 160) }}
                            </p>

                            <div class="mt-auto">
                                {{-- Tech icons or badges --}}
                                @if(isset($project->technologies) && $project->technologies->isNotEmpty())
                                    <div class="mb-2">
                                        @foreach($project->technologies as $tech)
                                            @if(!empty($tech->image))
                                                <img src="{{ asset('storage/' . $tech->image) }}" 
                                                     alt="{{ $tech->name }}" 
                                                     title="{{ $tech->name }}" 
                                                     class="me-2" style="height:28px;">
                                            @else
                                                <span class="badge bg-secondary me-1">{{ $tech->name }}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                @elseif(!empty($project->tech_images) && is_array($project->tech_images))
                                    <div class="mb-2">
                                        @foreach($project->tech_images as $img)
                                            <img src="{{ asset('storage/' . $img) }}" 
                                                 alt="tech" 
                                                 class="me-2" style="height:28px;">
                                        @endforeach
                                    </div>
                                @else
                                    @foreach(explode(',', $project->tech_stack ?? '') as $tech)
                                        @if(trim($tech) !== '')
                                            <span class="badge bg-outline-secondary me-1">{{ trim($tech) }}</span>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning mb-3"> Edit </a>
                    </div>
                </div>
            @endforeach
        </div>

        @if(method_exists($projects, 'links'))
            <div class="mt-4">
                {{ $projects->links() }}
            </div>
        @endif
    @else
        <div class="alert alert-info">No projects found.</div>
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