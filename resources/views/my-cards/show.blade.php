@extends('layouts.main')

@section('content')

    <h2>
        Details for: {{ $card->name }}
    </h2>

<div class="row">
    <img class="col-4" src="{{ URL($card->image_large) }}">

    <div class="col-4">
        <div class="row">
        <h3> Average selling price: {{ $card->cardmarket }} </h3>
        
        </div>
    </div>

    <div class="col-4">
    Type: {{ $card->types }}
    <br/>
    <br/>
    <br/>
    Evolves From: <a href="/cards?search={{ $card->evolves_from }}"> {{ $card->evolves_from }} </a>
    </div>
</div>

<br/>
<br/>
<a href="/my-cards" type="button" class="btn btn-sm btn-outline-danger">Back to my cards!</a>

@endsection
