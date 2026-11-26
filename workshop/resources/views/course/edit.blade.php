@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

    <h1>Edit Course</h1>

    <div class="card">

        <form action="{{ route('courses.update', $course) }}" method="POST">

            @method('PUT')

            @include('course._form')

        </form>

    </div>

@endsection
