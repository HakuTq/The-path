@extends('layouts.app')

@section('title', 'Character select')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12" style="background-color: #0f110f;">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-3" style="font-family: 'Libre Baskerville', serif;">Select Your Character</h1>
            <p class="text-gray-400 text-lg">Choose a character to continue your adventure</p>
        </div>

        <!-- Create New Character Button -->
        <div class="mb-8">
            <a 
                href="{{ route('characters.create') }}" 
                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-semibold text-white transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 border border-[#8AB0AB]/30"
                style="background-color: #8AB0AB; font-family: 'Libre Baskerville', serif;"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5" fill="currentColor">
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
                </svg>
                Create New Character
            </a>
        </div>

        @if($characters->isEmpty())
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="h-24 w-24 mx-auto text-gray-600" fill="currentColor">
                        <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-3" style="font-family: 'Libre Baskerville', serif;">No Characters Yet</h2>
                <p class="text-gray-400 mb-6">Create your first character to begin your adventure</p>
                <a 
                    href="{{ route('characters.create') }}" 
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-semibold text-white transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105"
                    style="background-color: #8AB0AB;"
                >
                    Get Started →
                </a>
            </div>
        @else
            <!-- Characters Row -->
            <div class="flex flex-row items-center justify-center gap-8 w-full max-w-7xl flex-wrap">
                <!-- Existing Characters -->
                @foreach ($characters as $character)
                    <a 
                        href="{{ route('characters.show', ['character' => $character]) }}" 
                        class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-[#8AB0AB]/50 transition-all duration-500 hover:bg-white/[0.1] hover:shadow-[0_0_30px_rgba(138,176,171,0.3)] flex flex-col items-center justify-center gap-4 min-w-[300px] min-h-[280px]"
                        style="width: 18%;"
                    >
                        <!-- Character Name (Top Badge) -->
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 px-6 py-2 rounded-xl text-white font-bold text-xl shadow-lg max-w-[90%] truncate" style="background-color: #26413C; font-family: 'Libre Baskerville', serif;" title="{{ $character->name }}">
                            {{ $character->name }}
                        </div>

                        <!-- Character Info -->
                        <div class="mt-4 flex flex-col items-center justify-center gap-3 text-center">
                            <!-- Classes -->
                            <div>
                                <p class="text-gray-400 text-sm mb-2 uppercase tracking-wide">Classes</p>
                                <div class="flex flex-col gap-1">
                                    @foreach ($character->classes() as $class)
                                        <p class="text-white text-base">{{ $class->label() }}</p>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Level -->
                            <p class="text-2xl font-bold text-[#8AB0AB]">Level {{ $character->level() }}</p>

                            <!-- Race -->
                            <p class="text-lg text-white">{{ $character->race }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($characters->hasPages())
                <div class="mt-12">
                    <div class="flex items-center justify-center gap-2">
                        {{-- Previous Page Link --}}
                        @if ($characters->onFirstPage())
                            <span class="px-4 py-2 rounded-lg bg-white/5 text-gray-600 cursor-not-allowed">
                                ← Previous
                            </span>
                        @else
                            <a href="{{ $characters->previousPageUrl() }}" class="px-4 py-2 rounded-lg bg-white/5 text-white hover:bg-[#8AB0AB]/20 hover:text-[#8AB0AB] transition-all duration-300 border border-white/10 hover:border-[#8AB0AB]/50">
                                ← Previous
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        <div class="flex items-center gap-2">
                            @foreach ($characters->getUrlRange(1, $characters->lastPage()) as $page => $url)
                                @if ($page == $characters->currentPage())
                                    <span class="px-4 py-2 rounded-lg font-bold text-white border-2" style="background-color: #8AB0AB; border-color: #8AB0AB;">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="px-4 py-2 rounded-lg bg-white/5 text-white hover:bg-[#8AB0AB]/20 hover:text-[#8AB0AB] transition-all duration-300 border border-white/10 hover:border-[#8AB0AB]/50">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        </div>

                        {{-- Next Page Link --}}
                        @if ($characters->hasMorePages())
                            <a href="{{ $characters->nextPageUrl() }}" class="px-4 py-2 rounded-lg bg-white/5 text-white hover:bg-[#8AB0AB]/20 hover:text-[#8AB0AB] transition-all duration-300 border border-white/10 hover:border-[#8AB0AB]/50">
                                Next →
                            </a>
                        @else
                            <span class="px-4 py-2 rounded-lg bg-white/5 text-gray-600 cursor-not-allowed">
                                Next →
                            </span>
                        @endif
                    </div>

                    <p class="text-center text-gray-400 text-sm mt-4">
                        Showing {{ $characters->firstItem() ?? 0 }} to {{ $characters->lastItem() ?? 0 }} of {{ $characters->total() }} characters
                    </p>
                </div>
            @endif
        @endif
    </div>
@endsection