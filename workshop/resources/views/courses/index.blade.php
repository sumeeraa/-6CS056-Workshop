
<x-layouts.app>
    <div class="container">
        <h1>Course Management</h1>

        <a href="{{ route('courses.create') }}">
            + Add New Course
        </a>

        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        @if ($courses->isEmpty())
            <p>No courses available yet.</p>
        @else
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
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
                            <td>
                                {{ $course->is_active ? 'Active' : 'Inactive' }}
                            </td>
                            <td>
                                <a href="{{ route('courses.show', $course) }}">View</a>
                                |
                                <a href="{{ route('courses.edit', $course) }}">Edit</a>

                                <form action="{{ route('courses.destroy', $course) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this course?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>
