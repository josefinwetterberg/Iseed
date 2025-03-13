@props(['title' => 'Default Title'])

<header class="header">
    <h1>{{ $title }}</h1>
    <nav>
        <ul>
            {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>
</header>