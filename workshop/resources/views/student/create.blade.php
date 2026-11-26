@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

    <h1>Add New Student</h1>

    <div class="card">

        @php
            $student = null;
        @endphp

        <form action="{{ route('students.store') }}" method="POST">

            @include('student._form')

        </form>

    </div>

@endsection
