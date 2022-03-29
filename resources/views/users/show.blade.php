@extends('layouts.main')

@section('content')

<!-- displays the cards belonging to a single user -->


    <h2>
        Details for: {{ $user->name }}
    </h2>

    <h4>
        Cards ({{ $user->cards->count() }} cards):
    </h4>

    <ol>
        @foreach($user->cards->sortBy('name') as $card)
            <li>
                {{ $card->card_title }} ({{ $card->set_name }})
            </li>
        @endforeach
    </ol>

@endsection
