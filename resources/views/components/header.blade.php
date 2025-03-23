@props(['title' => 'Default Title'])

<header class="header">
    <nav>
    
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    
    </nav>
</header>