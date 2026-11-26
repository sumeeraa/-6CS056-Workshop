@extends('layouts.app')

@section('title', 'Student Details')

@section('content')

    <h1>Student Details</h1>

    <x-alert type="success">
        {{ session('success') }}
    </x-alert>

    <div class="card">

        <h2>{{ $student->name }}</h2>

        <p><strong>ID:</strong> {{ $student->id }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Phone:</strong> {{ $student->phone }}</p>
        <p><strong>Address:</strong> {{ $student->address ?? 'Not provided' }}</p>
        <p><strong>Date of Birth:</strong> {{ $student->date_of_birth?->format('Y-m-d') }}</p>
        <p><strong>Age:</strong> {{ $student->age }}</p>

        <br>

        <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">
            Edit Student
        </a>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            Back to Students
        </a>

        <x-delete-form :route="route('students.destroy', $student)" />

    </div>

@endsection
