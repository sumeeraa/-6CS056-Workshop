@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <h1>Course Management</h1>

    <x-alert type="success">
        {{ session('success') }}
    </x-alert>

    <div class="card">

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            Add New Course
        </a>

        <h2>Course List</h2>

        @if ($courses->isEmpty())

            <p>No courses found.</p>

        @else

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->duration }} days</td>
                            <td>{{ number_format((float) $course->fee, 2) }}</td>
                            <td>{{ $course->difficulty }}</td>
                            <td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('courses.show', $course) }}"
                                   class="btn btn-success">View</a>

                                <a href="{{ route('courses.edit', $course) }}"
                                   class="btn btn-primary">Edit</a>

                                <x-delete-form :route="route('courses.destroy', $course)" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

    </div>

@endsection
