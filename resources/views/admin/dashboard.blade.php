<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <p>Halo,! Kamu sudah login.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
