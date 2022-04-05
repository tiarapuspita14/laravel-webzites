<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <title>Home</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F68989;">
        <div class="container">
        <a class="navbar-brand" href="/post">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color:black" href="/welcome">Laravel</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:black" href="/about">About</a>
            </li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" style="background-color: #F68989; border:#F68989;", type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sections
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" style="" href="/coffee">Coffe Break</a>
                <a class="dropdown-item" href="/tea">Spill The Tea</a>
                <a class="dropdown-item" href="/random">Random Talk</a>
              </div>
            </div>
          </ul>
        </div>
    </div>
      </nav>

    <!--bodeh-->
    

    <div class="container mt-4">
      <div class="container">
          <div class="col-8">
            @yield('container')
          </div>
          <div class="col">
            @yield('container_2')
          </div>
        </div>
  </div>

    <!-- inin footer nya -->

    <footer class="footer text-center text-white  mt-100%" style="background-color: #F68989; ">
      <!-- Grid container -->
      <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
         
          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://twitter.com/justcallmegrac4"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter icon iconify" data-icon="ion-social-twitter"></i
          ></a>
    
          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.instagram.com/tiarapus_/"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram icon iconify" data-icon="ion-social-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.linkedin.com/in/tiarapuspita-/"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin icon iconify" data-icon="ion-social-linkedin"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://github.com/tiarapuspita14"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github icon iconify" data-icon="ion-social-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
      <!-- Copyright -->
      <div class="text-center text-dark p-3" style="background-color: #F68989;">
        © 2022 Copyright
        <a class="text-dark"></a>
      </div>
      <!-- Copyright -->
    </footer>
 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>