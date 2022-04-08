@extends('layouts.main')

@section('content')

    <h1>
        Pokemon
    </h1>

    <div class="row">
        
    
    <form action="{{ route('characters.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">
        <button>Search</button>
    </form>
    
    <div class="col-9">
    <ul>
        @foreach($characters as $character)
            <li>
                <a href="{{ route('characters.show', $card) }}">
                    {{ $character->name }}
                    <img src="{{ URL($character->image) }}">
                </a>
            </li>
        @endforeach
    </ul>
    </div>

    {{ $characters->links() }}
    </div>

@endsection