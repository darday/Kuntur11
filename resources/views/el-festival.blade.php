<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Festival Kunturñawi</title>
  <link rel="icon" href="img/logos/icofestival.png" type="image/x-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">


  {{-- fafa Icon --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Styles -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/sponsor.css">
  {{-- animated --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!--js-->
  <script defer src="css/js/carousel.js"></script>

  <script type="text/javascript" src="css/js/jquery.js"></script>

  <style>
    /* para navbadesplegable  */
    .dropdown:hover>.dropdown-menu {
      display: block;
    }

    .dropdown-menu {
      margin: -0.125rem 0 0;
    }

    html,
    body {


      /*  */
      background-color: #fff;
      color: black;
      font-family: 'Helvetica Neue LT Pro 300', sans-serif;
      font-weight: 200;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-smd {
      margin-bottom: 30px;
    }
  </style>
</head>

<body style=" background-size: cover; background-image: url('img/varias/fondo2.png') ; ">



  @include('components/navBar')


  <div class="container container2 animate__animated  animate__fadeIn ">
    <br><br><br><br>
    <div class="div text-center">
      <h1 class="titnoti" style="text-align: center; color:#fff !important">Qué es el Festival Kunturñawi?</h1>
    </div>
    <hr>
    <div class="row ">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
        <div id="carouselExampleIndicators" class="carousel slide  " style="width: 100%; height:auto" data-ride="carousel" data-pause="false">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('img/carousel/PORTADA-BANNER3.jpg'); height:200px;  border-radius: 25px">

            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/carousel/PORTADA-BANNER2.jpg'); height:200px; border-radius: 25px">
              <div class="carousel-caption d-none d-md-block">
                <!--<h2 class="display-4">Fundación Arte Nativo</h2>
                                  <p class="lead text-center">This is a description for the second slide.</p>-->
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/carousel/PORTADA-BANNER4.jpg'); height:200px;border-radius: 25px">
              <div class="carousel-caption d-none d-md-block">
                <!--<h2 class="display-4">Fundación Arte Nativo</h2>
                                  <p class="lead text-center">This is a description for the third slide.</p>-->
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

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
        <br>
        <br>
        <p style="color:#fff !important">Kunturñawi, es una apuesta al cine ecuatoriano, su descentralización hacia el centro del país:
          ciudades y comunidades indigenas, para accedan a las películas como un derecho y la formación de
          públicos menos favorecidos. A lo largo de estas diez ediciones se ha constituído en la ventada de
          difusión de 417 films a una audiencia de mas de cien mil ciudadanos urbanos y rurales.</p>

        <p style=" color:#fff !important">Estamos en la décima primera edición y las miradas son diversas en 37 obras cinematográficas que
          serán expuestas del 5 al 12 de noviembre del 2022 en las Provincias de Chimborazo, Cotopaxi, Tungurahua
          y Bolívar.
        </p>

      </div>
      <br><br><br>
      <br><br><br>
      <br><br><br>
    
    </div>
  </div>

  @include('components/footer')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>