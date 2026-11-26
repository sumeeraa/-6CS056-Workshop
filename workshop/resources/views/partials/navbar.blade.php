<nav class="navbar">
    <div class="nav-brand">
        <a href="{{ route('students.index') }}">Training Institute</a>
    </div>

    <div class="nav-links">
        <a href="{{ route('students.index') }}"
           class="{{ request()->routeIs('students.*') ? 'active' : '' }}">
            Students
        </a>

        <a href="{{ route('courses.index') }}"
           class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
            Courses
        </a>
    </div>
</nav>
