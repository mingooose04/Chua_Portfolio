@extends('layouts.content')

@section('title', 'home')

@section('content')

<div class ="row align-items-center">
    <div class="col-md-4 text-center">
        <img>
    </div>

    <div class="col-md-8">
        <h1>{{ $profile->first_name}}</h1>

        <ul class="list-unstyled">

        </ul>
    </div>
</div>
@endsection