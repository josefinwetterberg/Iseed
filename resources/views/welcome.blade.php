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
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="welcome-main">
                <h1 class="logo">Iseed</h1>
        </main>
        <footer>
            <p>&copy; Iseed 2025</p>
        </footer>
    </body>
</html>