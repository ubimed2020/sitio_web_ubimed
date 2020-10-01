<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
     body{
        width: 100%;
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
    </style>

    <title>Pacientes||Ubimed</title>
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
    <div class="container" id="derechos">
        <div class="col">

       <!--     <h1 style="color: #65c4af; font-size:70pt;">Nuestros Pacientes</h1>-->
        </div>
      
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="img/2/10.jpg" alt="" style=" width: 90%; padding-left: 70px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="color: #65c4af; ">Con Ubimed, podrás registrarte y obtener los siguientes beneficios: </h2>
                    <ol id="lista2">
                        <li>Buscar y/o elegir un profesional de la salud </li>
                        <li>Comunicarte con tu médico tratante a través de una videoconsulta en tiempo real</li>
                        <li> Agendarte en la fecha y hora más apropiadas para ti, evitando barreras administrativas</li>
                        <li> Gestionar tu mismo la historia clínica </li>
                        <li>Podrás tener copia de tu historia clínica, tu consentimiento informado, formula e incapacidades y recomendaciones en el correo electrónico que registraste en la plataforma</li>
                        <li>Realizar los pagos de tus consultas ó cuotas moderadoras directamente a tu profesional o institución tratante</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>


    </div>
    <div>

        <div class="row">
            <div class="col">
                <?php
                //include("templetes/ubimed.php");
                ?>
            </div>
        </div>
        <br>
        <br>
        <div>




            <!--<p style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">Agenda tu consulta  o la toma de tu laboratorio clinico sin salir de casa, contactanos:</p>
            <p class="lead" style=" font-size: 18px;
           font-weight: 300;
           margin-top: 20px;
           color: #9c9c9c;
           text-align: left;">
                <a class="btn btn-primary btn-lg" href="#" role="button">Ingresa Aqui</a>
            </p>
        </div>
	<div class="card mb-3">
            <img src="img/05.jpeg" width="50%" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style=" color: #65c4af; text-align: center; font-size:40pt">Modelo de Atencion</h5>
                <p class="card-text" style=" font-size:18pt; color: #9c9c9c; text-align: center;">
                   
                </p>
				<ul class="list-group">
					<li class="list-group-item"><h3>Podrás acceder a todos los beneficios de la telemedicina interactiva solo que ahora lo podrás hacer en tiempo diferido </h3></li>

					
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Buscar y/o elegir un profesional de la salud  </li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Comunicarte con tu médico tratante a través de una videoconsulta en tiempo real </li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Agendarte en la fecha y hora más apropiadas para ti, evitando barreras administrativas</li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Gestionar tu mismo la historia clínica  </li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Podrás tener copia de tu historia clínica, tu consentimiento informado,  formula e incapacidades y recomendaciones en el correo electrónico que registraste en la plataforma </li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Podrás tener copia de tu historia clínica, tu consentimiento informado, formula e incapacidades y recomendaciones en el correo electrónico que registraste en la plataforma </li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Programar de forma automática las alertas para que no olvides tomar tus medicamentos</li>
					<li class="list-group-item list-group-item-primary" style="Text-align:center;">Realizar los pagos de tus consultas ó cuotas moderadoras directamente a tu profesional o institución tratante </li>
					</ul>
        		</div>-->


        </div>
        <footer>
            <?php
            include("templetes/pie.php");
            ?>
        </footer>
</body>

</html>