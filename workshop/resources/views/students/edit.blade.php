
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h2>Edit Student Details</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $student->name) }}">
        @error('name') <p>{{ $message }}</p> @enderror
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $student->email) }}">
        @error('email') <p>{{ $message }}</p> @enderror
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone', $student->phone) }}">
        @error('phone') <p>{{ $message }}</p> @enderror
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ old('address', $student->address) }}">
        @error('address') <p>{{ $message }}</p> @enderror
        <br><br>

        <label>Date of Birth:</label><br>
        <input type="date" name="date_of_birth"
            value="{{ old('date_of_birth', $student->date_of_birth) }}">
        @error('date_of_birth') <p>{{ $message }}</p> @enderror
        <br><br>

        <button type="submit">Update Student</button>

    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>
