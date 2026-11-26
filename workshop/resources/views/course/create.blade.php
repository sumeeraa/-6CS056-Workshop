@extends('layouts.app')

@section('title', 'Add Course')

@section('content')

    <h1>Add New Course</h1>

    <div class="card">

        @php
            $course = null;
        @endphp

        <form action="{{ route('courses.store') }}" method="POST">

            @include('course._form')

        </form>

    </div>

@endsection
