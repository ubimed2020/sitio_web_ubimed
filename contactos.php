<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'soporte@ubimed.com.co';
$titulo = 'hola prueba ubimed';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
 
if ($_POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
echo '<script>El mensaje se ha enviado</script>';
} else {
  echo '<script>upss Ocurrio Un Problema<script>';
}
}



?>


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
    <title>UBIMED|CONTACTOS</title>
    <style type="text/css">
            label {
                  display:block;
                  margin-top:20px;
                  letter-spacing:1px;
            }
    
 
            form {
                margin:0 auto;
                width:400px;
            }
            
            input, textarea {
                width:380px;
                height:27px;
                border:2px solid #f6f6f6;
                padding:10px;
                margin-top:5px;
                font-size:10px;
                color:#ffffff;
            }
            label{
              color:#65c4af;
            }
            
            textarea {
                height:150px;
            }
            
            #submit {
                width:85px;
                height:35px;
                border:none;
                margin-top:20px;
                cursor:pointer;
            }
          #submit{
              background: #65c4af;
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

  <section class="principal">
  <form method="post" action="contactos.php">
      <br>
        <h1 style="color: #65c4af;">Contactenos</h1>

       <label for="nombre">Nombre:</label>
       <input id="nombre" name="nombre" placeholder="Nombre completo">
       <label for="email">Email:</label>
       <input id="email" name="email" type="email" placeholder="ejemplo@email.com">
       <label for="mensaje">Mensaje:</label>
       <textarea id="mensaje" name="mensaje" placeholder="¿En que te Podemos Ayudar?"></textarea>
       <input id="submit" name="submit" type="submit" value="Enviar">
  </form>
  </section>
  <hr>
  <!--<div class="container">
                <h1 style="color: #65c4af;">Estamos Ubicados En Bogotá:</h1>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3704518073914!2d-74.03271!3d4.705544199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aaad4725459%3A0xcce5b9862bed17b0!2sMEDICAL%20CENTER%20SIGLO%20XXI!5e0!3m2!1ses-419!2sco!4v1599742836102!5m2!1ses-419!2sco" width="400" height="250" frameborder="0" 
                style="border:0;
                float:left;
                margin-right: 20px;
                margin-bottom: 20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  <p class="container-all animate__animated animate__backInRight" style=" font-size: 18px;
                                    font-weight: 300;
                                    margin-top: 20px;
                                    color: #9c9c9c;
                                    text-align: center;"><br>Ceular:
                                                          <a href="tel: +573128772788">3128772788</a><br>
                                                      contactenos@ubimed.com.co<br>
                                                      A K 9 N. 127b-16 CN 410<br>
                                                      Edf. Medical Center Siglo XXi <br></p><br>
                   
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
                <h1 style="color: #65c4af;">Estamos Ubicados En San Juan de Pasto:</h1>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.922895322778!2d-77.28309628620949!3d1.2139024991145912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed4838a55baa5%3A0x132cd58374e07584!2sCra.%2025%20%2315-62%204to%20piso%2C%20Pasto%2C%20Nari%C3%B1o!5e0!3m2!1ses-419!2sco!4v1599743430912!5m2!1ses-419!2sco" width="400" height="250" frameborder="0" 
                style="border:0;
                float:left;
                margin-right: 20px;
                margin-bottom: 20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                
              <p class="container-all animate__animated animate__backInRight" style=" font-size: 18px;
                                    font-weight: 300;
                                    margin-top: 20px;
                                    color: #9c9c9c;
                                    text-align: center;"><br>celular:
                                    <a href="tel: +573128772788">3128772788</a>
                                                     <br>
                                                      contactenos@ubimed.com.co<br>
                                                      Carrera 25#15-62 4to piso Pasto<br>
                                                      <br></p>
                   
  </div>-->

  
  <br>
    <br>
    <br>
  <br>
    <br>
    <br>
    <br>
    <br>
   
  <footer>
        <?php
        include("templetes/pie.php");
        ?>
    </footer>

</body>
</html>