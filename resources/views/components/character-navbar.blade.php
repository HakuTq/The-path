<nav class="fixed top-0 left-0 w-full z-50 border-b transition-all duration-300" style="background-color: #1A1D1A; border-color: #26413C;">
    <div class="px-4 sm:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo Section -->
            <div class="flex-shrink-0">
                <a href="{{ route('welcome') }}" class="flex items-center group">
                    <img 
                        src="{{ asset('storage/images/logo.png') }}" 
                        alt="Logo" 
                        class="h-8 w-auto transition-transform duration-300 group-hover:scale-110"
                    >
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a 
                    href="{{ route('characters.index') }}" 
                    class="relative px-3 py-2 text-white text-base transition-colors duration-300 hover:text-[#8AB0AB] group"
                    style="font-family: 'Libre Baskerville', serif;"
                >
                    Characters
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#8AB0AB] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
                
                <a 
                    href="{{ route('characters.create') }}" 
                    class="relative px-3 py-2 text-white text-base transition-colors duration-300 hover:text-[#8AB0AB] group"
                    style="font-family: 'Libre Baskerville', serif;"
                >
                    Create Character
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#8AB0AB] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>

                <div class="ml-2 pl-3" style="border-left: 1px solid #26413C;">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button 
                            type="submit" 
                            class="relative px-3 py-2 text-white text-base transition-colors duration-300 hover:text-[#8AB0AB] group"
                            style="font-family: 'Libre Baskerville', serif;"
                        >
                            Log out
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#8AB0AB] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button 
                    type="button" 
                    class="inline-flex items-center justify-center p-2 rounded-lg text-white transition-all duration-300"
                    style="hover:color: #8AB0AB;"
                    onclick="toggleMobileMenu()"
                    aria-label="Toggle menu"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden border-t" style="border-color: #26413C; background-color: #1A1D1A;">
        <div class="px-4 py-2 space-y-1">
            <a 
                href="{{ route('characters.index') }}" 
                class="block px-3 py-2 text-white text-base rounded-lg transition-all duration-300 hover:text-[#8AB0AB]"
                style="font-family: 'Libre Baskerville', serif; hover:background-color: #26413C;"
            >
                Characters
            </a>
            
            <a 
                href="{{ route('characters.create') }}" 
                class="block px-3 py-2 text-white text-base rounded-lg transition-all duration-300 hover:text-[#8AB0AB]"
                style="font-family: 'Libre Baskerville', serif; hover:background-color: #26413C;"
            >
                Create Character
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button 
                    type="submit" 
                    class="w-full text-left px-3 py-2 text-white text-base rounded-lg transition-all duration-300 hover:text-[#8AB0AB]"
                    style="font-family: 'Libre Baskerville', serif; hover:background-color: #26413C;"
                >
                    Log out
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Spacer to prevent content from being hidden under fixed navbar -->
<div class="h-16"></div>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }
</script>