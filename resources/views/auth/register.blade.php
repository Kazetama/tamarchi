<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register.perform') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>
