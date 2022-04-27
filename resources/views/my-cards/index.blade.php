@extends('layouts.main')

@section('content')

<a href="/cards" type="button" class="btn btn-sm btn-outline-danger">View all cards!</a>
<br/>
<br/>

    <h1>
        My Cards:
    </h1>

    <form action="{{ route('users.cards.index') }}" method="GET">
        <label>Search: </label>    
        <input type="text" name="search">

        <button>Search</button>
    </form>
    
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            
            @foreach($userCards as $card)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body, center-block" style="padding: 15px; margin: 30px">
                            <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">       
                            <a href="{{ route('users.cards.show', $card) }}" class="text-center" style="color:black">
                                {{ $card->name }}
                                <img class="card-img-top" src="{{ URL($card->image) }}" class="img-responsive, img-rounded, hover-shadow">
                            </a>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
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

@endsection


                
                                
                            
           
       