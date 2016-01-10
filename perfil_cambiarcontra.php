<?php require_once('funciones/sesiones.php'); ?>
<?php require_once('funciones/sacalocalidad.php'); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
    
 <script language="JavaScript" type="text/javascript">
function MM_validateForm() {
	
	if (document.form1.comprobar_contraseña.value=="" || document.form1.comprobar_contraseña.value==" ") {
alert ("El campo de contraseña antigua esta vacio");
return false
}
	if (contrasena_vieja.value!=comprobar_contraseña.value) {
alert ("Contraseña antigua erronea");
return false
}
	if (document.form1.contraseña_nueva_1.value=="" || document.form1.contraseña_nueva_1.value==" ") {
alert ("El campo de contraseña nueva esta vacio");
return false
}
	
		if (document.form1.contraseña_nueva_2.value=="" || document.form1.contraseña_nueva_2.value==" ") {
alert ("El campo de repetir contraseña nueva esta vacio");
return false
}
	if (contraseña_nueva_1.value!=contraseña_nueva_2.value) {
alert ("Las nuevas contraseñas no coinciden");
return false
}	

}
</script>
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
   <div class="" style="width:20%; float:left;">
      <ul class="nav nav-pills nav-stacked">
      <li ><a href="perfil.php">Informacion Personal</a></li>
      <li><a href="perfil_trayectos.php">Trayectos</a></li>
      <li class="active"><a href="perfil_cambiarcontra.php">Cambiar Contraseña</a></li>
       <li><a href="perfil_darsedebaja.php">Darse de baja</a></li>
      </ul>
    
    </div>
     <div class="" style="width:80%; float:left;">
            <div class="div1form">
      <form action="php/cambio_contrasena.php" method="POST" name="form1" id="form1">
        <h3>Cambio de contraseña</h3>
        <div class="wrap">
        		 <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id_usuario"] ?>" />
                 <input type="text" name="contrasena_vieja" id="contrasena_vieja" value="<?php echo $_SESSION['contrasena'] ?>" />
           
           
           
           		<div id="epasswordActual">
                <input type="password" name="comprobar_contraseña" id="comprobar_contraseña" placeholder="Escribe tu contraseña antigua" /> <span class="required"></span>
                
              </div>
        
            <div id="epasswordNew1">
                <input type="password" name="contraseña_nueva_1" id="contraseña_nueva_1" placeholder="Escribe tu contraseña nueva" />
                 <span class="required"></span>
              
                <input type="password" name="contraseña_nueva_2" id="contraseña_nueva_2" placeholder="Escribe tu contraseña nueva otra vez" /> <span class="required"></span>
                
              </div>
            
            <div class="center">
            
           		 <input class="paginate" type="submit" value="Cambiar contraseña" name="submit" onclick="return MM_validateForm()" />
        	</div>
         </div>
     </form>
     </div>
    
    </div>
      
 </div>
     
     
    
    <div class="container " style="text-align:center">
     	<div class="apartados">¿Como Funciona? </div>
        <div class="apartados">¿Quienes somos? </div>
        <div class="apartados">Registrate! </div>
    
    
    </div>
    
    
    
    
    

  
  </body>
  
  
  
  
  <footer>
  
          <a class="btn btn-social-icon btn-facebook" ><i class="fa fa-facebook"></i></a>
          <a class="btn btn-social-icon btn-google" ><i class="fa fa-google-plus"></i></a>
          <a class="btn btn-social-icon btn-twitter" ><i class="fa fa-twitter"></i></a>           
            
      
</footer>
</html>
