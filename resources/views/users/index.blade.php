@extends('layouts.main')

<!-- can search for users by their username -->

@section('content')

    <h1>
        Users:
    </h1>

    {{ $users->links() }}

    <form action="{{ route('users.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">

        <button>Search</button>
    </form>
    
    <ul>
        @foreach($users as $user)
            <li>
                
                <a href="{{ route('users.show', $user) }}">
                    
                    {{ $user->username }}

                    <strong>
                        {{ $user->cards->count() }}
                    </strong>
                </a>
            </li>
        @endforeach
    </ul>

    @endsection