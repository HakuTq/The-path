<div class="navbar">
    <div class="navbar-left">
        <!-- Logo or name -->
        <p class="navbar-logo"> Logo </p>
    </div>
    <div class="navbar-right">
        <a href="{{ route('characters.index') }}" class="navbar-link">Characters</a>
        <a href="{{ route('characters.create') }}" class="navbar-link">Create Character</a>
        
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="navbar-logout">Log out</button>
        </form>
    </div>
</div>