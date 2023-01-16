@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        @if ($project->cover_image)
            <img class="img-fluid" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
        @else
            <div class="placeholder p-5 bg-secondary">Placeholder</div>
        @endif
        <div class="d-flex gap-4">
            <div class="details">
                <h1>{{ $project->title }}</h1>
                <div class="content">
                    {{ $project->description }}
                </div>

            </div>
        </div>
    </div>
@endsection
