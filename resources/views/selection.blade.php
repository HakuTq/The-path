@extends('layouts.app')

@section('title', 'Character select')

@section('content')
    <div class="whole-page-container">
        <!-- First page after login, where the user will select a character or make a new one (like Netflix profiles) -->
        <div class="characters">
            <!--foreach character of user -->
            <a href="{{ route('selection') }}" class="character-container">
                <p>Class</p>
                <p>Level</p>
                <p>Race</p>
                <div class="character-name">Matosh</div>
            </a>
            <!--empty character (creates a new one) -->
            <!--paginate for every 3 chars (last character = new character)-->
            <a class="character-container-empty" href="{{ route('selection') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="4rem" fill="white"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
                <div class="character-name">New character</div>
            </a>
        </div>
    </div>
@endsection
