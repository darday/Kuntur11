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
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">

        {{-- fafa Icon --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/carousel.css" >
        <link rel="stylesheet" href="css/sponsor.css">


        <script defer src="css/js/carousel.js"></script>


        <script type="text/javascript" src="css/js/jquery.js"></script>

        <style type="text/css">
            .ellipsis {
              text-overflow: ellipsis;
              white-space: nowrap;
              overflow: hidden;
             }
            .short { width: auto; }

 
        </style>


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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

            .links > a {
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

            
            .dropdown:hover>.dropdown-menu {
              display: block;
            }
            .dropdown-menu {
              margin: -0.125rem 0 0;
            }

        </style>
    </head>
    <body  style=" background-size: cover; background-image: url('img/varias/fondo2.png') ;">

        @include('components/navBar')

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="padding-top:10vh !important" >
            <div class="carousel-item active" data-bs-interval="4000"  style="    background-size: cover; background-image: url('img/carousel/WEB.png') ;  "> 
            </div>
        </div>

          <!-- @include('components/redessociales') -->

        <div class="container container2">
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-right:4%">
                    <h1  class="titulo" style="color:white !important">AUSPICIANTES</h1 >
                    <br>
                </div>
            </div>
        </div>

        <div class="">
            <img src="img/logos/LOGOS.png" width="100%" alt="">
        </div> 
        <br><br><br>

        
        
        @include('components/footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
