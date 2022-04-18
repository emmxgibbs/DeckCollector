@extends('layouts.main')

@section('content')

    <h2>
        Details for: {{ $character->name }}
    </h2>

<div class="row">
    <img class="col-4" src="{{ URL($character->image_large) }}">

    <div class="col-4">
        <div class="row">
        <h3> Average selling price: </h3>
            <div>

            </div>
        <h3> How much did you sell this card for?<input type="text"></h3>
        </div>
    </div>

    <div class="col-4">
    Type:
    <br>
    Evolves From:
    
        

    </div>

</div>

@endsection

<!-- //attach cards to pokemon table  -->

