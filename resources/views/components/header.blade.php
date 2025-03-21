@props(['title' => 'Default Title'])

<header class="header">
    <h1>{{ $title }}</h1>
    <nav>
    
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="border: none; background: none; color: inherit; cursor: pointer;">Logout</button>
                </form>
    
    </nav>
</header>