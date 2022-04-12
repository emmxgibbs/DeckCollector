@extends('layouts.main')

<!-- can search for cards by their title -->

@section('content')

    <h1>
        Cards:
    </h1>

    <main class="container" id="vue-app">
        @yield('content')
        <hello-world></hello-world>
    </main>

    <div class="row">
        
    
    <form action="{{ route('cards.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">
        <button>Search</button>
    </form>
    
    <div class="col-9">
    <ul>
        @foreach($cards as $card)
            <li>
                <a href="{{ route('cards.show', $card) }}">
                    {{ $card->name }}
                    <img src="{{ URL($card->image) }}">
                </a>
            </li>
        @endforeach
    </ul>
    </div>

    {{ $cards->links() }}
    </div>

@endsection