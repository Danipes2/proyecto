<?php require_once('../conexiones/objCn.php'); ?>


<?php
$nombre= mysql_real_escape_string($_REQUEST['nombre']);
$apellidos= mysql_real_escape_string($_REQUEST['apellidos']);
$email= mysql_real_escape_string($_REQUEST['mail']);
$sexo= mysql_real_escape_string($_REQUEST['sexo']);
$contrasena=mysql_real_escape_string($_REQUEST['nombre']);

$comprobaremail=mysql_query("SELECT * FROM usuario WHERE email = '".$email."'");
if (mysql_num_rows($comprobaremail)>0)
{
  
   
        
		?>  
          
  <html>
   <head>
        <meta http-equiv="Refresh" content="3;url=../registrarse.php">
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Enlazados/VamosJuntos</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/maincss.css" rel="stylesheet">

    <link href="../bootstrap-social-gh-pages/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap-social-gh-pages/assets/css/docs.css" rel="stylesheet" >

    <!-- SweetAlert for Bootstrap -->
    <script src="//lipis.github.io/bootstrap-sweetalert/lib/sweet-alert.js"></script>
    <link href="//lipis.github.io/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">

    <link href="../bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet" >

    <link rel="stylesheet" href="../css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
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
            <a class="navbar-brand" href="index.php">Enlazados</a>
          </div>
          
          
         
          <!-- Agrupar los enlaces de navegación, los formularios y cualquier
               otro elemento que se pueda ocultar al minimizar la barra -->
              
          <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav navbar-right">
                	
                  <li class="active"><a href="registrarse.php">Registrarse</a></li>
                  <li><a href="iniciosesion.php">Iniciar Sesion</a></li>
                  <li><a href="#">Como Funciona</a></li>
                      
                </ul>
         
            
  	</div>
</nav>
   
    <div class="container contenedor" style="text-align:center">
       
        
        <body style="text-align:center">
       <h1> El email introducido ya esta siendo usado </h1>
        </body>
  </html>
		
		<?php
		
    
//header('Location:../registrarse.php');
 
} else {

$insertSQL = "INSERT INTO usuario (nombre,apellidos,sexo,email,contrasena) VALUES ( '".$nombre."', '".$apellidos."', '".$sexo."', '".$email."', '".$contrasena."')";


$Result1 = mysql_query($insertSQL, $objCn) or die(mysql_error());
 
  
  header(sprintf("Location:../iniciosesion.php"));



}

?>
