<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Raleway);






.content {
    position: relative;
    width: 90%;
    max-width: 500px;
    margin: auto;
    overflow: hidden
}

.content .content-overlay {
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    height: 99%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s
}

.content:hover .content-overlay {
    opacity: 1
}

.content-image {
    width: 100%
}


.content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s
}

.content:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1
}

.content-details h3 {
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
   
}

.content-details p {
    color: #fff;
    font-size: 0.8em
}

.fadeIn-bottom {
    top: 80%
}

    </style>
    <title>Document</title>
</head>
<body>
   
    <div class="row">
    <div class="col-md-4">
             <div class="content"> <a href="servicios.php">
                     <div class="content-overlay"></div> <img style=" box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px" class="content-image" src="img/2/2.jpg">
                     <div class="content-details fadeIn-bottom">
                         <h3 class="content-title" style="font-size: 40px; color:#9c9c9c; font-family:Poppins;"">Servicios</h3>
                         <p class="content-text" style="font-size: 15px; ">Atencion Domiciliaria<br>Telemedicina
                        <br>
                    Teleorientacion<br>Consultor&iacute;a y Asesor&iacute;a<br><span style="color:#21D2A4; font-size: 25px;">leer mas...</span> </p>
                     </div>
                 </a> </div>
         </div>
         <div class="col-md-4">
             <div class="content"> <a href="http://app.ubimed.com.co">
                     <div class="content-overlay"></div> <img style=" box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px" class="content-image" src="img/logo ubimed_v2-02.jpg">
                     <div class="content-details fadeIn-bottom">
                         <h3 class="content-title" style="font-size: 40px; color:#9c9c9c; font-family:Poppins;"> App Ubimed</h3>
                         <p class="content-text" style="font-size: 20px; color:#21D2A4;">Ingresa</p>
                     </div>
                 </a> </div>
         </div>
         <div class="col-md-4">
             <div class="content"> <a href="pacientes.php">
                     <div class="content-overlay"></div> <img class="content-image" src="img/2/1.jpg" style=" box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px">
                     <div class="content-details fadeIn-bottom">
                         <h3 class="content-title" style="font-size: 40px; color:#9c9c9c; font-family:Poppins; ">Pacientes</h3>
                         <p class="content-text"></p>
                     </div>
                 </a> </div>
         </div>
       
        
     </div>



</body>
</html>