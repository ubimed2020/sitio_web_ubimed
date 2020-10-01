<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/62db16416d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style type="text/css">
        hr {
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, rgba(33, 210, 164, 1) 0%, rgba(6, 221, 165, 1) 63%, rgba(7, 246, 178, 1) 93%);

        }

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
    <div class="top-header">
        <div class="row" style="margin-top: 1%;">
            <div class="col-lg-4" style="padding-left: 7%;">
                <i class="fas fa-phone-alt" style="color: #9c9c9c;"><a style="color: #9c9c9c; font-family: Poppins; font-weight:100; " href="tel:3128772788">3128772788</a></i>
                <hp class="fas fa-envelope-open-text" style="color: #9c9c9c;"><a style="color: #9c9c9c; font-family:  Poppins; font-weight:100; " href=" contactos.php">contacto@ubimed.com.co</a></p>

            </div>
            <div class="col-lg-4" style="padding-left:5%; padding-bottom:3%;">
                <a href="http://app.ubimed.com.co" style="  background: #01F8B2; border-radius: 100px; padding: 0px 13px; color: #ffffff; text-decoration: none;
                 font-size: 1.20em; margin: 0 10px; margin-top:10px; font-family: Poppins;">Iniciar Sesion</a>

            </div>
            <div class="col-lg-4" style="padding-left:7%; ">

                <a href="https://www.facebook.com/UbimedappCol/" style="margin-right: 20px;"><i class="fab fa-facebook" style="color: #9c9c9c; font-size: 30px;"></i></a>
                <a href="https://instagram.com/ubimedappcolombia?igshid=1eiqeur2526pa" style="margin-right: 20px;"><i class="fab fa-instagram-square" style="color: #9c9c9c; font-size: 30px;"></i></a>
                <a href="https://api.whatsapp.com/send?phone=+573128772788&text= HOLA, ubimed" style="margin-right: 20px;"><i class="fab fa-whatsapp" style="color: #9c9c9c; font-size: 30px;"></i></a>

            </div>
        </div>


    </div>

    <nav class="navbar navbar-expand-lg navbar-light " id="nav1" style="background-color: #ffffff; width: 100%;">
        <a class="navbar-brand" href="index.php">
            <img id="logoNav" class="d-block w-100" style="max-width: 140px; max-height: 150px;" src="img/ubimed.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 45%;">
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
                        <a class="dropdown-item" href="servicios.php#teleorientacion" style="font-family: Poppins;">Consultor&iacute;a y Asesor&iacute;a</a>
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

                            <h2 style="color:#21D2A4; margin-top: 100px;">¡Salud y Bienestar Donde Quiera Que Estes!</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/2/20.jpeg" alt="Second slide" style="max-height: 45%; max-width:90%; margin-left:5%">
                        <div class="carousel-caption d-none d-md-block">

                            <h2 style="color:#9c9c9c; font-family:Poppins;">Gestionamiento de pacientes con patolog&iacute;­as cr&oacutenicas y agudas apoyados con estrategias de e-salud</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/2/15.jpg" alt="Third slide" style="max-height: 45%; max-width:90%; margin-left:5%">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="sars-cov-2lgG.php" class="fas fa-plus-circle" style="text-decoration: none;   margin-left:98%;   color:#21D2A4;"></a>
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
            <p style="color:#9c9c9c; font-family:Poppins; font-size: 25px; padding-left: 0%; text-align: center;">
                Somos una IPS que se especializa en la prestaci&oacuten, dise&ntildeo e implementaci&oacuten de modelos de atenci&oacuten en salud basados en eHealth,
                teniendo como prioridad siempre la calidad de la atenci&oacuten y la satisfacci&oacuten de nuestros clientes </p>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top:80px;">
        <div class="col-12">
            <?php include('card5.php') ?>
        </div>

    </div>
    </div>
    </div>

    <div class="row" style="">
        <div class="col-lg-12" style="padding-top: 8%; margin-left: 20%; margin-right: 15%;  max-width: 850px;">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" src="img/videoPagina.mp4" controls></video>
            </div>
        </div>
    </div>
    </div>

    <!-- <div class="row" style="padding-left: 50px; width:auto; max-width: 300px;">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <h2 style="text-align:right; color: #21D2A4;  margin-bottom: 20px;  margin-top: 150px;">App Ubimed</h2>
            <div id="preSombra">

            </div>
            <div id="sombra" style=" float:left;
                                        background-color: #A7A7A7; margin: 10px 0 0 5px; border-radius: 20px;">

                <a href="http://app.ubimed.com.co"><img src="img/logoMin.png" alt="" style="display: block;
                                                                position: relative;
                                                                margin: -6px 6px 6px -6px; border-radius: 20px;"></a>
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-4 col-xl-3">

            </div>
        </div>


    </div>-->
    <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-12">
            <h1 style=" color: #21D2A4 ;margin-top: 5%; margin-left: 5%;">Estamos Ubicados En Bogot&aacute:</h1>
            </div>           
        </div>
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 18%;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3704518073914!2d-74.03271!3d4.705544199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aaad4725459%3A0xcce5b9862bed17b0!2sMEDICAL%20CENTER%20SIGLO%20XXI!5e0!3m2!1ses-419!2sco!4v1599742836102!5m2!1ses-419!2sco"  frameborder="0" style="border:0; width: 100%;
                float:left;
                margin-right: 20px;
              
                height: 250%;
                margin-top: 1%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20%; margin-top: 50%; ">
            <div class="col-lg-4" style="padding-left: 5%; font-size: 20px;"><i class="fas fa-phone-alt" style="color: #9c9c9c;"><a style="color: #9c9c9c; font-family: Poppins; font-weight:100; " href="tel:3128772788">3128772788</a></i></div>
            <div class="col-lg-4" style="padding-left: 3%; font-size: 20px;"><hp class="fas fa-envelope-open-text" style="color: #9c9c9c;"><a style="color: #9c9c9c; font-family:  Poppins; font-weight:100; " href=" contactos.php">contacto@ubimed.com.co</a></p></div>
            <div class="col-lg-4" style="font-size: 20px;"><hp class="fas fa-map-marked-alt" style="color: #9c9c9c;"><a style="color: #9c9c9c; font-family:  Poppins; font-weight:100; " >A K 9 N. 127b-16 CN 410 Edf. Medical Center Siglo XXi </a></p></div>
       
        </div>
    </div>
    <!--fin container principal-->

    </div>

    <div class=" container-rrss">

                    <a href="https://api.whatsapp.com/send?phone=+573128772788&text=buenos dias, ubimed" target="_blank">

                        <img src="icon/icon-whatsapp.png" title="Enviar mensaje de WhatsApp" alt="">

                    </a>



            </div>
            <footer>
                <div class="row">
                    <div class="col-12  ">


                        <img src="img/2/logo-supersalud.png" alt="" style="max-width: 200px; width: 50%;  display:block;
margin:auto;">





                    </div>
                </div>
                <div class="row">
                    <div class="col-12 " style="text-align:center; padding-right: 2%;">
                        &#169; Copyrigth-Ubimed-2020
                    </div>
                </div>
            </footer>
</body>

</html>