<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        .container {
            width: 50%;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            background: #198754;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        .back-btn {
            display: inline-block;
            margin-top: 15px;
            color: #333;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Add New Student</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">

        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}">

        <button type="submit">Save Student</button>
    </form>

    <a href="{{ route('students.index') }}" class="back-btn">
        ← Back to Students
    </a>

</div>

</body>
</html>
