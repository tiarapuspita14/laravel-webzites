
@extends('layouts.main')

@Section('container')
<!-- ini body-->

<div class="container ">
  <div class="jumbotron" style="width: 100%">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
</div>

  <div class="container" style="padding-bottom: 10px">
  <div id="carouselExampleIndicators" class="carousel slide col-lg-10 offset-lg-1 " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/ngopi.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <a class="btn btn-outline-secondary btn-lg"  href="/coffee" role="button">Coffe Break</a>
            <h5>Ngopi sambil bahas :</h5>
            <p>Semua hal yang interesting, but again not to gibah.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/ngeteh.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <a class="btn btn-outline-secondary btn-lg"  href="/tea" role="button">Coffe Break</a>
            <h5>Ngeteh sambil bahas :</h5>
            <p>Semua hal yang interesting, but again not to gibah.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/randoman.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <a class="btn btn-outline-secondary btn-lg"  href="/random" role="button">Coffe Break</a>
            <h5>Ngobrol aja disini :</h5>
            <p>Semua hal yang interesting, but again not to gibah.</p>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>


@endsection
