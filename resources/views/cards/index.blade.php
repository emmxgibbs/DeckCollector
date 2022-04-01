@extends('layouts.main')

<!-- can search for cards by their card_title -->

@section('content')

    <h1>
        Cards:
    </h1>

    

    <form action="{{ route('cards.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">
        <button>Search</button>
    </form>
    
    <ul>
        @foreach($cards as $card)
            <li>
                <!-- clicking this takes you to a user profile -->
                <a href="{{ route('cards.show', $card) }}">
                    <!-- showing the card title -->
                    {{ $card->name }}

                    <!-- showing the count of cards belonging to said user -->
                </a>
            </li>
        @endforeach
    </ul>

@endsection