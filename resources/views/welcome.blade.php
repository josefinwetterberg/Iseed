<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iseed</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <header>
        @if (Route::has('login'))
        <nav class="welcome-nav">
            @auth
            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
            @endauth
        </nav>
        @endif
    </header>

    <main class="welcome-main">
        <h1 class="logo">Iseed</h1>
        <p>Login to manage your products.</p>
        <img src="{{ asset('images/flowers.jpg') }}" alt="Tropical flowers and leaves">
    </main>

    <footer>
        <p>&copy; Iseed 2025</p>
    </footer>
</body>

</html>