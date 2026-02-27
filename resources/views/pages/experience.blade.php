{{-- resources/views/page/experience.blade.php --}}
@extends('layouts.content')

@section('title', 'Experience')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Experience</h2>

    @if(isset($experience) && $experience->isNotEmpty())
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="fw-bold">Title</th>
                        <th class="fw-bold">Organization</th>
                        <th class="fw-bold">Date</th>
                        <th class="fw-bold">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($experience as $exp)
                        <tr>
                            <td>{{ $exp->title ?? '—' }}</td>
                            <td>{{ $exp->organization ?? '—' }}</td>
                            <td>
                                @if(!empty($exp->date))
                                    {{ \Illuminate\Support\Str::limit($exp->date, 20) }}
                                @else
                                    —
                                @endif
                            </td>
                            <td style="max-width:420px;">
                                {{ \Illuminate\Support\Str::limit($exp->description ?? '', 220) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No experience entries found.</div>
    @endif
</div>
@endsection