@csrf

<x-form-input
    name="name"
    label="Course Name"
    :value="$course?->name"
    required
/>

<x-form-textarea
    name="description"
    label="Course Description"
    :value="$course?->description"
/>

<x-form-input
    name="duration"
    label="Duration (Days)"
    type="number"
    :value="$course?->duration"
    required
    min="1"
/>

<x-form-input
    name="fee"
    label="Course Fee"
    type="number"
    :value="$course?->fee"
    required
    min="0"
    step="0.01"
/>

<div class="form-group">
    <label for="difficulty">Difficulty</label>

    <select name="difficulty" id="difficulty" class="form-control" required>
        <option value="">Select Difficulty</option>

        @foreach (['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}"
                @selected(old('difficulty', $course?->difficulty) === $level)>
                {{ $level }}
            </option>
        @endforeach
    </select>

    @error('difficulty')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="is_active">Course Status</label>

    <select name="is_active" id="is_active" class="form-control" required>
        <option value="1" @selected((string) old('is_active', $course?->is_active ?? 1) === '1')>
            Active
        </option>

        <option value="0" @selected((string) old('is_active', $course?->is_active ?? 1) === '0')>
            Inactive
        </option>
    </select>

    @error('is_active')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ $course?->exists ? 'Update Course' : 'Create Course' }}
</button>

<a href="{{ route('courses.index') }}" class="btn btn-secondary">
    Cancel
</a>
