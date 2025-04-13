<div class="navbar">
    <div class="navbar-left">
        <!-- Logo or name -->
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="navbar-logo">
        </a>
    </div>
    <div class="navbar-right">
        <a href="{{ route('characters.index') }}" class="navbar-link">Characters</a>
        <a href="{{ route('characters.create') }}" class="navbar-link">Create Character</a>
        
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="navbar-logout">
                <span class="underline-effect">Log out</span>
            </button>
        </form>
    </div>
</div>