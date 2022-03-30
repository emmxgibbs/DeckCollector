@extends('layouts.main')

@section('content')

<!-- displays the cards belonging to a single user -->


    <h2>
        Details for: {{ $card->name }}
    </h2>

    <h4>
        Cards ({{ $card->cards->count() }} cards):
    </h4>

    <ol>
        @foreach($card->cards->sortBy('name') as $card)
            <li>
                {{ $card->card_title }} ({{ $card->set_name }})
            </li>
        @endforeach
    </ol>

@endsection