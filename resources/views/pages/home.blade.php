{{-- resources/views/home.blade.php --}}
@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    @if($profiles->isEmpty())
        <div class="alert alert-info">No profiles found.</div>
    @else
        @foreach($profiles as $profile)
            <div class="row align-items-center mb-4">
                <div class="col-md-3 text-center">
                    <img src="{{ $profile->avatar_url ?? asset('images/default-avatar.png') }}"
                         alt="{{ $profile->first_name ?? '' }} {{ $profile->last_name ?? '' }}"
                         class="img-fluid rounded-circle mb-2" style="max-width: 160px;">
                </div>

                <div class="col-md-9">
                    <h3 class="mb-0">{{ $profile->first_name ?? '' }} {{ $profile->last_name ?? '' }}</h3>
                    <p class="text-muted mb-2">{{ $profile->title ?? '' }}</p>
                    <p>{{ \Illuminate\Support\Str::limit($profile->bio ?? '', 300) }}</p>

                    <div class="small text-muted">
                        @if(!empty($profile->location)) <span class="me-3"><strong>Location:</strong> {{ $profile->location }}</span> @endif
                        @if(!empty($profile->email)) <span class="me-3"><strong>Email:</strong> <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></span> @endif
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    @endif
</div>
@endsection