@extends('layouts.app')

@section('title', 'Students')

@section('content')

    <h1>Student Management</h1>

    <x-alert type="success">
        {{ session('success') }}
    </x-alert>

    <div class="card">

        <a href="{{ route('students.create') }}" class="btn btn-primary">
            Add New Student
        </a>

        <h2>Student List</h2>

        @if ($students->isEmpty())

            <p>No students found.</p>

        @else

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->date_of_birth?->format('Y-m-d') }}</td>
                            <td>{{ $student->age }}</td>
                            <td>
                                <a href="{{ route('students.show', $student) }}"
                                   class="btn btn-success">View</a>

                                <a href="{{ route('students.edit', $student) }}"
                                   class="btn btn-primary">Edit</a>

                                <x-delete-form :route="route('students.destroy', $student)" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

    </div>

@endsection
