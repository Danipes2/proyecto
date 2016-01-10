<?php require_once('funciones/sesiones.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Enlazados/VamosJuntos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/maincss.css" rel="stylesheet">

    <link href="bootstrap-social-gh-pages/assets/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="stylesheet">
    <link href="bootstrap-social-gh-pages/assets/css/docs.css" rel="stylesheet" >

    
    <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet" >
    
    
    <!-- Para el uso del slider    -->
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/mainjs.js"></script>


  </head>
  <body>
       <nav class="navbar navbar-default" role="navigation">
          <!-- El logotipo y el icono que despliega el menú se agrupan
               para mostrarlos mejor en los dispositivos móviles -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
              <span class="sr-only">Desplegar navegación</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index_user.php">Enlazados</a>
          </div>
          
          
         
          <!-- Agrupar los enlaces de navegación, los formularios y cualquier
               otro elemento que se pueda ocultar al minimizar la barra -->
              
          	<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                	
                 <!-- <li><a href="mememe.php"><?php echo $_SESSION["id_usuario"] ?></a></li>-->
                  <li><a href="perfil.php"><?php echo $_SESSION["usuario"] ?></a></li>
                  <li ><a href="php/cierra.php">Cerrar Sesion</a></li>
                  <li><a href="#">Como Funciona</a></li>
                      
                </ul>
  			</div>
            
             
</nav>
<nav class="navbar navbar-default" role="navigation">
            
            <div>
                <ul class="nav nav-justified">
                	
                  <li class="active"><a href="buscartrayecto.php">Buscar un trayecto</a></li>
                  <li><a href="ofreceruntrayecto.php">Ofrecer un trayecto</a></li>
                  <li><a href="mensajes.php">Mensajes</a></li>
                  <li><a href="perfil.php">Perfil</a></li> 
                </ul>
  			</div>
            </nav>
   
    <div class="container contenedor" style="text-align:center">
     <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/foto1.jpg" />
                <div data-u="thumb">Muy facil encontrar transporte</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/02.jpg" />
                <div data-u="thumb">Registrate y podras ver o ofrecer un transporte </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/03.jpg" />
                <div data-u="thumb">Compartir coche es mas facil de lo que crees</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/04.jpg" />
                <div data-u="thumb">Encuentra a personas que van al mismo destino</div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Bullet Navigator 
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:10px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>-->
        <!-- Arrow Navigator
        <span data-u="arrowleft" class="jssora05l" style="top:123px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:123px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
        -->
    </div>
     
    
    
    </div>
    
    <div class="container " style="text-align:center">
     	<div class="apartados">¿Como Funciona? </div>
        <div class="apartados">¿Quienes somos? </div>
        <div class="apartados">Registrate! </div>
    
    
    </div>
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  
  
  
  
  <footer>
  
          <a class="btn btn-social-icon btn-facebook" ><i class="fa fa-facebook"></i></a>
          <a class="btn btn-social-icon btn-google" ><i class="fa fa-google-plus"></i></a>
          <a class="btn btn-social-icon btn-twitter" ><i class="fa fa-twitter"></i></a>           
            
      
</footer>
</html>
