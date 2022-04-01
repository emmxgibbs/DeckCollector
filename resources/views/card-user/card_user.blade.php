@extends('layouts.main')

@section('content')

    <h1>
        Cards
    </h1>

    {{ $cards->links() }}

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
                    {{ $card->card_title }}

                    <!-- showing the count of cards belonging to said user -->
                    <strong>
                        {{ $card->users->count() }}
                    </strong>
                </a>
            </li>
        @endforeach
    </ul>

@endsection