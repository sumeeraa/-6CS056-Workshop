
<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        .container {
            width: 90%;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .add-btn, .view-btn, .edit-btn, .delete-btn {
            display: inline-block;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .add-btn, .view-btn {
            background: #198754;
        }

        .edit-btn {
            background: #0d6efd;
        }

        .delete-btn {
            background: #dc3545;
        }

        .add-btn {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #333;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .success-message {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Management System</h1>

    @if(session('success'))
        <p class="success-message">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('students.create') }}" class="add-btn">
        + Add New Student
    </a>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @forelse($students as $student)

                <tr>
                    <td>{{ $student->id }}</td>

                    <td>{{ $student->name }}</td>

                    <td>{{ $student->email }}</td>

                    <td>{{ $student->phone }}</td>

                    <td>{{ $student->address }}</td>

                    <td>

                        <a href="{{ route('students.show', $student) }}"
                           class="view-btn">
                            View
                        </a>

                        <a href="{{ route('students.edit', $student) }}"
                           class="edit-btn">
                            Edit
                        </a>

                        <form action="{{ route('students.destroy', $student) }}"
                              method="POST"
                              style="display: inline;"
                              onsubmit="return confirm('Are you sure you want to delete this student?');">

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="delete-btn">
                                Delete
                            </button>

                        </form>

                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6" style="text-align: center;">
                        No students found.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

</body>
</html>
