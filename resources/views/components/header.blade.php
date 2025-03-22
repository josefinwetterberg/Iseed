@props(['title' => 'Default Title'])

<header class="header">
    <h1>{{ $title }}</h1>
    <nav>
    
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    
    </nav>
</header>