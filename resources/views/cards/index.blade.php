@extends('layouts.main')

@section('content')

<a href="/my-cards" type="button" class="btn btn-sm btn-outline-danger">View my cards!</a>
<br/>
<br/>

    <h1>
        All Cards:
    </h1>

    <form action="{{ route('cards.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">
        <button>Search</button>
    </form>

<!-- should be in a component for reuse in several pages as a card -->
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($cards as $card)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body, center-block" style="padding: 15px; margin: 30px">
                            <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                            <a href="{{ route('cards.show', $card) }}" class="text-center" style="color:black">
                                {{ $card->name }}
                                <img class="card-img-top" src="{{ URL($card->image) }}" class="img-responsive, img-rounded, hover-shadow">
                            </a>
                                
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="owned" id="ownedCheckbox">
                                <label class="form-check-label" for="ownedCheckbox">
                                        Owned
                                </label>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{ $cards->links() }}

@endsection