<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login.perform') }}" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register.show') }}">Register</a></p>
</body>

</html>
