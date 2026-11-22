cat > resources/views/courses/show.blade.php <<'EOF'
<x-layouts.app>
    <div class="container">
        <h1>Course Details</h1>

        <a href="{{ route('courses.index') }}">← Back to Courses</a>

        <div>
            <h2>{{ $course->name }}</h2>

            <p>
                <strong>Description:</strong>
                {{ $course->description ?? 'No description available' }}
            </p>

            <p>
                <strong>Duration:</strong>
                {{ $course->duration }} days
            </p>

            <p>
                <strong>Course Fee:</strong>
                {{ number_format((float) $course->fee, 2) }}
            </p>

            <p>
                <strong>Difficulty:</strong>
                {{ $course->difficulty }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ $course->is_active ? 'Active' : 'Inactive' }}
            </p>
        </div>

        <a href="{{ route('courses.edit', $course) }}">Edit Course</a>

        <form action="{{ route('courses.destroy', $course) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Are you sure you want to delete this course?')">
                Delete Course
            </button>
        </form>
    </div>
</x-layouts.app>
EOF