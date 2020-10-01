<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62db16416d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
    <style type="text/css">
        /*fin cajas*/
        /*Boton */
        .button {
            background: #01F8B2;
            border-radius: 100px;
            padding: 10px 60px;
            color: #fff;
            text-decoration: none;
            font-size: 1.80em;
            margin: 0 15px;
            margin-left: 1180px;

        }

        /* Hover state animation applied here */
        .button:hover {
            -webkit-animation: hover 1200ms linear 2 alternate;
            animation: hover 1200ms linear 2 alternate;
        }

        /* Active state animation applied here */
        .button:active {
            -webkit-animation: active 1200ms ease 1 alternate;
            animation: active 1200ms ease 1 alternate;
            background: #5F9BE0;
        }

        .gray {
            background: #D2D2D2;
        }

        .gray:active {
            background: #b9b9b9;
        }

        /*Iconos de las redes sociales*/

        .container-redes {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container-redes a {
            margin-top: 4px;
        }

        .container-redes img {
            width: 40px;
            padding: 4px;
            background: rgba(0, 0, 0, 0.0);
            cursor: pointer;
            border-radius: 100%;
            transition: all 300ms;
        }

        .container-redes a:hover img {
            background: rgba(85, 84, 84, 0.973);
        }

        /*Iconos de las rrss*/
        .container-rrss {
            position: fixed;
            bottom: 20px;
            left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container-rrss a {
            margin-top: 4px;
        }

        .container-rrss img {
            width: 40px;
            padding: 4px;
            background: rgba(0, 0, 0, 0.0);
            cursor: pointer;
            border-radius: 100%;
            transition: all 300ms;
        }

        .container-rrss a:hover img {
            background: rgba(0, 0, 0, 0.10);
        }

        .band {
            width: 90%;
            max-width: 1240px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-gap: 20px;
            padding-top: 60px;
        }

        @media (min-width: 30em) {
            .band {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 60em) {
            .band {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .card {
            background: white;
            text-decoration: none;
            color: #444;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            min-height: 100%;
            position: relative;
            top: 0;
            -webkit-transition: all .1s ease-in;
            transition: all .1s ease-in;
        }

        .card:hover {
            top: -2px;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.2);
        }

        .card article {
            padding: 20px;
            -webkit-box-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .card h1 {
            font-size: 20px;
            margin: 0;
            color: #333;
        }

        .card p {
            -webkit-box-flex: 1;
            flex: 1;
            line-height: 1.4;
        }

        .card span {
            font-size: 12px;
            font-weight: bold;
            color: #999;
            text-transform: uppercase;
            letter-spacing: .05em;
            margin: 2em 0 0 0;
        }

        .card .thumb {
            padding-bottom: 60%;
            background-size: cover;
            background-position: center center;
        }

        @media (min-width: 60em) {
            .item-1 {
                grid-column: 1 / span 2;
            }

            .item-1 h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " id="nav1" style="background-color: #ffffff; width: 100%;">
        <a class="navbar-brand" href="index.php">
            <img id="logoNav" class="d-block w-100" style="width: 100%; max-width: 150px; ;" src="img/ubimed.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="font-family: Poppins; font-size: 20px;">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown  " style="font-family: Poppins; font-size: 20px;">
                    <a style="font-family: Poppins;" class="nav-link dropdown-toggle" href="servicios.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="servicios.php" style="font-family: Poppins; font-size: 20px;">Servicios</a>
                        <a class="dropdown-item" href="servicios.php#AtencionDomiciliaria" style="font-family: Poppins;">Atencion Domiciliaria</a>
                        <a class="dropdown-item" href="servicios.php#telemedicina" style="font-family: Poppins;">Telemedicina</a>
                        <a class="dropdown-item" href="servicios.php#teleorientacion" style="font-family: Poppins;">Telemonitoreo</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pacientes.php " style="font-size: 20px; font-family: Poppins;">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="font-size: 20px; font-family: Poppins;" href="contactos.php">Contactenos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">

        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/Part_1.png" alt="primer slide" style="max-height: 45%; max-width:90%; margin-left:5%">
                        <div class="carousel-caption d-none d-md-block">

                            <h2 style="color:#21D2A4; margin-top: 100px;">Â¡Salud y Bienestar Donde Quiera Que Estes!</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/2/20.jpeg" alt="Second slide" style="max-height: 45%; max-width:90%; margin-left:5%">
                        <div class="carousel-caption d-none d-md-block">

                            <h2 style="color:#9c9c9c; font-family:Poppins;">Gestionamiento de pacientes con patolog&iacute;Â­as cr&oacutenicas y agudas apoyados con estrategias de e-salud</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/2/15.jpg" alt="Third slide" style="max-height: 45%; max-width:90%; margin-left:5%">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="sars-cov-2lgG.php" class="fas fa-plus-circle" style="text-decoration: none;   margin-left: 1180px; font-size: 40px; color:#21D2A4;"></a>
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
    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-12">
            <p style="color:#9c9c9c; font-family:Poppins; font-size: 25px; padding-left: 50px; text-align: center;">
                Somos una IPS que se especializa en la prestaci&oacuten, dise&ntildeo e implementaci&oacuten de modelos de atenci&oacuten en salud basados en eHealth,
                teniendo como prioridad siempre la calidad de la atenci&oacuten y la satisfacci&oacuten de nuestros clientes </p>
        </div>
    </div>
    <div class="row" style="margin-top:80px;">
        <div class="col-12">
            <?php// include('card5.php') ?>
        </div>

    </div>
</body>
</html>