@extends('layouts.content')

@section('title', 'Projects')

@section('content')
<div class="container">
    <h1>Create Projects</h1>

    <form action="{{ route('projects.store) }}" method="POST">
        @csrf 

        <div class="mb-3">
            <label>Project Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <input type="text" class="form-control" name="description">
        </div>

        <div class="mb-3">
            <label>Tech Stack</label>
            <input type="text" class="form-control" name="tech_stack">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="image" class="form-control" name="image">
        </div>

        <button class="btn btn-success">Save Project</button>
    </form>
</div>

@endsection