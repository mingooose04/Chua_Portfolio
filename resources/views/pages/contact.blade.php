@extends('layouts.content')

@section('title', 'Contact')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Contact Information</h2>

    @if(isset($contacts) && $contacts->isNotEmpty())
        <table class="table table-bordered">
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th>Email</th>
                        <td>{{ $contact->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $contact->phone }}</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td><a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook }}</a></td>
                    </tr>
                    <tr>
                        <th>LinkedIn</th>
                        <td><a href="{{ $contact->linkedin }}" target="_blank">{{ $contact->linkedin }}</a></td>
                    </tr>
                    <tr>
                        <th>GitHub</th>
                        <td><a href="{{ $contact->github }}" target="_blank">{{ $contact->github }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">No contact information available.</div>
    @endif
</div>
@endsection