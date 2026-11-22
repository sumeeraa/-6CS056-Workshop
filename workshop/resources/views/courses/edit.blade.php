cat > resources/views/courses/edit.blade.php <<'EOF'
<x-layouts.app>
    <div class="container">
        <h1>Edit Course</h1>

        <a href="{{ route('courses.index') }}">← Back to Courses</a>

        @if ($errors->any())
            <div>
                <strong>Please fix the following errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Course Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $course->name) }}"
                    required
                >
            </div>

            <div>
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                >{{ old('description', $course->description) }}</textarea>
            </div>

            <div>
                <label for="duration">Duration (days)</label>
                <input
                    type="number"
                    id="duration"
                    name="duration"
                    value="{{ old('duration', $course->duration) }}"
                    min="1"
                    required
                >
            </div>

            <div>
                <label for="fee">Course Fee</label>
                <input
                    type="number"
                    id="fee"
                    name="fee"
                    value="{{ old('fee', $course->fee) }}"
                    min="0"
                    step="0.01"
                    required
                >
            </div>

            <div>
                <label for="difficulty">Difficulty</label>
                <select id="difficulty" name="difficulty" required>
                    <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
                    <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
                    <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
                </select>
            </div>

            <div>
                <label for="is_active">Status</label>
                <select id="is_active" name="is_active" required>
                    <option value="1" {{ old('is_active', $course->is_active ? '1' : '0') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active', $course->is_active ? '1' : '0') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit">Update Course</button>
        </form>
    </div>
</x-layouts.app>
EOF