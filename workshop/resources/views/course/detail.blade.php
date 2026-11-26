@extends('layouts.app')

@section('title', 'Course Details')

@section('content')

    <h1>Course Details</h1>

    <x-alert type="success">
        {{ session('success') }}
    </x-alert>

    <div class="card">

        <h2>{{ $course->name }}</h2>

        <p><strong>ID:</strong> {{ $course->id }}</p>

        <p><strong>Description:</strong>
            {{ $course->description ?? 'No description provided' }}
        </p>

        <p><strong>Duration:</strong> {{ $course->duration }} days</p>

        <p><strong>Fee:</strong> {{ number_format((float) $course->fee, 2) }}</p>

        <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>

        <p><strong>Status:</strong>
            {{ $course->is_active ? 'Active' : 'Inactive' }}
        </p>

        <br>

        <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">
            Edit Course
        </a>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            Back to Courses
        </a>

        <x-delete-form :route="route('courses.destroy', $course)" />

    </div>

@endsection
