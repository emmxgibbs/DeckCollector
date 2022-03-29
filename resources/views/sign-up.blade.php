@extends('layouts.main')

@section('content')
<form style="align-content: center;">
    <div class="input-group mb-3">
        <span class="input-group-text" id="@">@</span>
        <input type="text" class="form-control" placeholder="Username" id="username" style="width: auto;">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email Address" id="email" style="width: auto;">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full Name" id="full-name" style="width: auto;">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Password" id="password" style="width: auto;">
    </div>
</form>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 6"></button>
  </div> -->

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SWSH9/SWSH9_EN_14.png" class="d-block w-30" alt="Shaymin V-star">
      <div class="card-name">
                <h5 class="series">Shaymin VSTAR</h5>
                <span class="number-in-set"><em>Sword & Shield—Brilliant Stars</em></span>
                <span class="notch-bottom-center-small"></span>
            </div>
    </div>

    <div class="carousel-item">
      <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SWSH9/SWSH9_EN_27.png" class="d-block w-30" alt="Simisear V">
      <div class="card-name">
            <h5 class="series">Simisear V</h5>
            <span class="number-in-set"><em>Sword & Shield—Brilliant Stars</em></span>
            <span class="notch-bottom-center-small"></span>
        </div>
    </div>

    <div class="carousel-item">
      <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SWSH9/SWSH9_EN_51.png" class="d-block w-30" alt="Luxray">
      <div class="card-name">
            <h5 class="series">Luxray</h5>
            <span class="number-in-set"><em>Sword & Shield—Brilliant Stars</em></span>
            <span class="notch-bottom-center-small"></span>
        </div>
    </div>

    <div class="carousel-item">
      <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SWSH9/SWSH9_EN_65.png" class="d-block w-30" alt="Whimsicott V-star">
      <div class="card-name">
            <h5 class="series">Whimsicott VSTAR</h5>
            <h5></h5>
            <span class="number-in-set"><em>Sword & Shield—Brilliant Stars</em></span>
            <span class="notch-bottom-center-small"></span>
        </div>
    </div>

    <div class="carousel-item">
      <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SWSH9/SWSH9_EN_109.png" class="d-block w-30" alt="Garchomp">
      <div class="card-name">
            <h5 class="series">Garchomp</h5>
            <h5></h5>
            <span class="number-in-set"><em>Sword & Shield—Brilliant Stars</em></span>
            <span class="notch-bottom-center-small"></span>
        </div>
    </div>
</div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection