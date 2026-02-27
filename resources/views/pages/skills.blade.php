{{-- resources/views/skills/index.blade.php --}}
@extends('layouts.content')

@section('title', 'Skills')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">My Skills</h2>
        <small class="text-muted">Updated {{ $skills->count() }} skills</small>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                    <th class="d-none d-md-table-cell">Description</th>
                </tr>
            </thead>
            <tbody>
                @forelse($skills as $skill)
                    <tr>
                        <td class="align-middle">
                            <strong>{{ $skill->name }}</strong>
                        </td>
                        <td class="align-middle">
                            <span class="badge bg-secondary">{{ $skill->level }}</span>
                        </td>
                        <td class="align-middle d-none d-md-table-cell">
                            @if(!empty($skill->description))
                                {{ $skill->description }}
                            @else
                                <span class="text-muted">No description provided</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">No skills found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection