@extends('layouts.main')

@section('content')

<html>

    <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">DeckCollector</h1>
          <p class="lead text-muted">Keep track of all your cards from the most popular trading card game of the century.</p>
          <p>
            <a href="/register" class="btn btn-warning my-2">Sign up to begin collecting</a>
            <a href="/login" class="btn btn-danger my-2">Login to view your collection</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/pl1/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/1" type="button" class="btn btn-sm btn-outline-danger">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/det1/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/2" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/dv1/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/4" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/ex3/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/8" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/gym1/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/17" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/sm9/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/19" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/ecard2/H2.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/23" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/dp1/1.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/47" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://images.pokemontcg.io/sm75/3.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/cards/290" type="button" class="btn btn-sm btn-outline-danger">View</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    @endsection


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>