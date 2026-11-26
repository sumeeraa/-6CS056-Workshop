@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

    <h1>Edit Student</h1>

    <div class="card">

        <form action="{{ route('students.update', $student) }}" method="POST">

            @method('PUT')

            @include('student._form')

        </form>

    </div>

@endsection
