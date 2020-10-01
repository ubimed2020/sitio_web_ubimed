<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://kit.fontawesome.com/62db16416d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            width: 100%;
        }

        hr {
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, rgba(33, 210, 164, 1) 0%, rgba(6, 221, 165, 1) 63%, rgba(7, 246, 178, 1) 93%);

        }

        #lista2 {
            counter-reset: li;
            list-style: none;
            *list-style: decimal;
            font: 15px 'trebuchet MS', 'lucida sans';
            padding: 0;
            margin-bottom: 4em;
            text-shadow: 0 1px 0 rgba(255, 255, 255, .5);
        }

        #lista2 ol {
            margin: 0 0 0 2em;
        }

        #lista2 li {
            position: relative;
            display: block;
            padding: .4em .4em .4em 2em;
            *padding: .4em;
            margin: .5em 0;
            background: #65c4af;
            color: #444;
            text-decoration: none;
            border-radius: .3em;
            transition: all .3s ease-out;
        }

        #lista2 li:hover {
            background: #eee;
        }

        #lista2 li:hover:before {
            transform: rotate(360deg);
        }

        #lista2 li:before {

            counter-increment: li;
            position: absolute;
            left: -1.3em;
            top: 50%;
            margin-top: -1.3em;
            background: #87ceeb;
            height: 2em;
            width: 2em;
            line-height: 2em;
            border: .3em solid #fff;
            text-align: center;
            font-weight: bold;
            border-radius: 2em;
            transition: all .3s ease-out;

        }

        /*.carousel-content {
     position: absolute;
     bottom: 10%;
     left: 5%;
     z-index: 20;
     color: white;
     text-shadow: 0 1px 2px rgba(0,0,0,.6);
}*/
        .button {
            position: relative;
            background: #01F8B2;
            border-radius: 50px;
            padding: 20px 60px;
            color: #fff;
            text-decoration: none;
            font-size: 1.45em;
            margin: 0 15px;
            left: 400px;
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
    </style>

    <title>Servicios|Ubimed</title>
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
        <img id="logoNav" class="d-block w-100" style="max-width: 150px;" src="img/ubimed.png" alt="">
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

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/2/13.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/2/11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/3/4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:#ffffff; font-size: 40px;  padding-top:5%;">Conoce mas a acerca de nuestros servicios de Pediatr&iacute;a en Domicilio
                        </h5>
                        <br>
                        <div class="col">
                            <a href="http://app.ubimed.com.co" style="  background: #01F8B2; border-radius: 100px; padding: 0px 13px; color: #ffffff; text-decoration: none;
                                 font-size: 1.20em; margin: 0 10px; margin-top:10px; font-family: Poppins; margin-left: 100%;">Ingresa</a>
                            <p></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <hr>

            <div class="row" id="AtencionDomiciliaria">
                <h1 class="display-" style="color: #65c4af; font-size:40pt;   margin-left: 4%;">Atencion Domiciliaria</h1>
                <br>
                <p class="lead" style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           margin-left: 4%;
           text-align: left;">Somos una Institución prestadora de servicios de salud (IPS) en
                    modalidad domiciliaria diseñada para llevar el hospital a casa, ofertando un servicio personalizado, tratamientos dirigidos por especialistas,
                    contribuyendo de esta forma a una recuperación mas rapida en su entorno familiar.</p>
                <p class="lead" style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           margin-left: 4%;
           color: #9c9c9c;
           text-align: left;"> A traves de nuestra tecnologia pacientes y proveedores de servicios
                    de salud ahora podrán obtener la mejor experiencia en la atención Domiciliaria a
                    través de la Monitorización permanente de sus variables clínicas.</p>


                <p class="lead" style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           margin-left: 4%;
           color: #9c9c9c;
           text-align: left;">
           <img src="img/2/21.jpg" alt="" style="width: 100%;  
            display: inline-block;  box-shadow: 4px 4px 4px #999;">
          <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           margin-left: 4%;
           color: #9c9c9c;
           text-align: left;">Agenda tu consulta o la toma de tu laboratorio clinico sin salir de casa, contactanos:</p>
                </p>
            </div>
            <div class="row">
            <a href="http://app.ubimed.com.co" style="  background: #01F8B2; border-radius: 100px; padding: 0px 13px; color: #ffffff; text-decoration: none;
                                 font-size: 1.20em; margin: 0 10px; margin-top:2%; margin-left: 5%; font-family: Poppins;">Ingresa Aqui</a>
            </div>
            <!-- <div style="color:antiquewhite;">

            <h1 class="title" style="color: #65c4af;"></h1>
            <img src="img/Imagenes Ubimed-03.jpg " alt="" style="width: 500px;
                                                float:right;
                                                margin-right: 20px;
                                                margin-bottom: 20px;
                                                float:left;
                                                background-color: #A7A7A7;"><br><br>
            <h1 class="sub-title " style="color: #65c4af;"></h1>
            <p class="container-all animate__animated animate__backInRight" style=" font-size: 18px;
                       font-weight: 300;
                       margin-top: 20px;
                       color: #9c9c9c;
                       text-align: center;"></p>
        </div>-->

            <hr>
            <div class="container2-all" id="telemedicina">


                <h1 class="sub-title" style="color: #65c4af; font-size:50pt">Telemedicina</h1>
                <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                    Ubimed, es la mejor opción para estar en comunicación con pacientes
                    y profesionales de la salud sin salir de casa,
                    manteniendo la rigurosidad del acto médico.
                </p>



                <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                    Ubimed Ips presta los servicios en modalidad de telemedicina interactiva
                    a través de la Videoconsulta
                    y no interactiva a través de la teleconsulta en tiempo diferido.
                </p>


                <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                    Nuestro sistema de Telemonitoreo Ubimed permite la transmisión de datos clínicos
                    y la interacción con su médico tratante en tiempo real, fue especialmente diseñado
                    para atender la demanda de pacientes con patologías crónicas, hospital domiciliario o para pacientes
                    que necesitan transporte especial o Ambulancias y requieren monitorización de signos vitales.
                </p>
                <hr>
                <br>
                <h1 class="title" style="color: #65c4af; "> Nuestras Especialidades:</h1>
                <br>


                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <ol id="lista2">
                                <li>Geriatría</li>
                                <li>Medicina Interna</li>
                                <li>Pediatría</li>
                                <li>Oftalmológica</li>
                                <li>Nutrición y dietética</li>
                            </ol>
                        </div>
                        <div class="col-6">
                            <ol id="lista2">
                                <li>Medicina General</li>
                                <li>Enfermería</li>
                                <li>Toma de muestras para el tamizaje integral en la detección de Sars Cov2</li>
                                <li>Medicina estética</li>
                            </ol>

                        </div>

                    </div>
                    <div class="row">

                        <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                            Tanto pacientes como profesionales de la salud dispondrán ahora de una solución
                            eHealth diseñada con estándares nacionales e internacionales HIPPA y Fhir
                            que garantizan la privacidad, confidencialidad, seguridad e interoperabilidad de la información clínica
                            permitiendo ofertar y prestar nuestros servicios con los más altos estándares de calidad
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="img/2/9.jpg" class="card-img-top" alt="" style="width: 100%;">
                        </div>



                    </div>
                </div>

                <br>

                <div style="text-align: left;">

                </div>


                <hr>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" id="teleorientacion">
                        <h2 style="color: #65c4af; font-size:25pt;">
                            Teleorientacion
                        </h2>
                        <br>
                        <br>
                        <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                            Nuestro servicio de teleorientación en las diferentes especialidades
                            ofertadas a traves de la linea de Ubimed o nuestro chat dispuesto las 24 / 7
                        </p>

                    </div>
                    <div class="col-md-6" id="consultoria">
                        <h2 style="color: #65c4af; font-size:25pt;">
                            Consultoria y Asesoria
                        </h2>


                        <p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                            Más de 10 años de experiencia en el diseño y la implementación de modelos
                            diferenciales de atención en salud basadas en TIC en Colombia y Latinoamérica,
                            nos dan la confianza para poner a tu disposición nuestra tecnología para la
                            consultoría y asesoría en el levantamiento y desarrollo
                            de modelos a la medida teniendo en cuenta la necesidad del sector y de nuestros clientes
                        </p>

                    </div>

                </div>
            </div>
            <!--<div class="container">
    <img src="img/istockTelemdicina.jpg" alt="" style="display:block; margin:auto; width:100%; height:80%;>
    </div>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>-->


        </div>
        <br>
        <br>

        <?php
        ?>
        <footer>
            <div class="row">
                <div class="col-12 text-center " style="">


                    <img id="hola" src="img/2/logo-supersalud.png" alt="" style="max-width: 300px; width: 70%;">





                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center ">
                    &#169; Copyrigth-Ubimed-2020
                </div>
            </div>
        </footer>
</body>

</html>