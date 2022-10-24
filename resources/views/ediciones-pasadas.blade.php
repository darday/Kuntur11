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
            .short { width: auto%; }

 
        </style>


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
    <body>




        @include('components/navBar')

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="padding-top:10vh !important" >
            <div class="carousel-item active" data-bs-interval="4000"  style="    background-size: cover; background-image: url('img/carousel/WEB.png') ;  "> 
            </div>
        </div>

          @include('components/redessociales')

        <div class="container container2">
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-right:4%">
                    <h1  class="titulo" style="color:#4c4c65 !important">EDICIONES PASADAS</h1 >
                    <br><br>
                </div>
            </div>
            
            
            <div class="row" style="padding-bottom: 2%">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    {{-- <h1 class="titulo2" style="font-size: 2.0em"><b>Titulo posible</b></h1> --}}
                    <h1 class="titulo22">2019/ 8va Edición, ganadores</h1>
                    <p><b class="negrita22">Corto Universitario:</b> “Waka” de Karen Guazco<br>
                        <b class="negrita22">Corto Animación:</b> Capuli<br>                                                         
                        <b class="negrita22">Corto Documental:</b> “Vestimenta Sápara” de Yanda Montalhuano<br>                                       
                        <b class="negrita22">Corto Ficción:</b> "Huaca" de Diego Ortuño<br>
                        <b class="negrita22">Largo Documental:</b> “Cuando ellos se fueron" de Verónica Haro Abril.<br>
                        <b class="negrita22">Largo Ficción:</b> "Azules Turquezas" de Mónica Mancero.<br>                                       
                        <b class="negrita22">Premio del Público:</b> “La mala noche" de Gabriela Calvache.<br>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <div class="espacioimg"><img src="img/jurado22/2.jpeg" class="card-img-top" alt="..."></div> 
                </div>
            </div>
            
            <div class="row" style="padding-bottom: 2%">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <h1 class="titulo22">2020/ 9na Edición, ganadores</h1>
                    <p><b class="negrita22">Corto Universitario:</b> “Siete ocho” dirigido por Bryan Torres, estudiante de INCINE.<br>
                        <b class="negrita22">Corto Ficción:</b> “Dulce Espera” de la directora Paula Llerena<br>
                        <b class="negrita22">Corto Animación:</b> “After Work” de Luis Usón y Andrés Aguilar.<br>                                                         
                        <b class="negrita22">Corto Documental:</b> “Un año, una hora, un deseo” de Daniel Yépez Brito.<br>                                       
                        <b class="negrita22">Largo Documental:</b> “Madre Luna”, de Daysi Burbano.<br>
                        <b class="negrita22">Largo Ficción:</b> “Panamá”, de Javier Izquierdo. <br>                                       
                        <b class="negrita22">Premio del Público:</b> “La Chica del Lago” de Jorge Bastidas.<br>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <div class="espacioimg"><img src="img/jurado22/4.jpeg" class="card-img-top" alt="..."></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <h1 class="titulo22">2021/ 10ma Edición, ganadores</h1>
                    <p><b class="negrita22">Mejor Actor:</b> Wolframio Sinue, por Sansón, de Pavel Quevedo.<br>
                        <b class="negrita22">Mejor Actriz:</b> Nataly Valencia<br>                                       
                        <b class="negrita22">Corto Documental:</b> “El Lunar En Su Espada” De Bernhard Hetzenauer y Pia Ilonka.<br>
                        <b class="negrita22">Corto Ficción:</b> “Luna” de Jesahel Newton.<br>
                        <b class="negrita22">Corto Animación:</b> “Entrañas” De Mayki Alvarado.<br>                                                         
                        <b class="negrita22">Largo Ficción:</b> Sumergible De Alfredo León León.<br>                                       
                        <b class="negrita22">Largo Documental:</b> “Airopai: Mi  Amigo Nelson” De Jacob Valladares Y Diana Molina.<br>
                        <b class="negrita22">Premio del Público:</b> Gafas Amarillas Del Director Ivan Mora Manzano.<br>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="img/jurado22/3.jpeg" class="card-img-top" alt="..."> 
                </div> 
            </div>
            <br>
            <br>
        </div>
        
        @include('components/footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
