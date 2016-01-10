<?php require_once('conexiones/objCn.php'); ?>
<?php require_once('funciones/sesiones.php'); ?>
<?php 
$id_usuario_receptor= mysql_real_escape_string($_REQUEST['id']);

$query_Recordset1 = "SELECT * FROM usuario WHERE id_usuario='".$id_usuario_receptor."'  ";

	$Recordset1 = mysql_query($query_Recordset1, $objCn) or die(mysql_error());
	
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($Recordset1);
	
	$nombre_receptor= $row_Recordset1['nombre'];



$hoy = date("d/m/Y"); 

?>
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
	
	if (document.form1.texto.value=="" || document.form1.texto.value==" ") {
alert ("El mensaje no puede estar vacio");
return false
}
	
	if (document.form1.texto.value===" Escribe el mensaje") {
alert ("El mensaje no puede estar vacio");
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
     <div class="div1form">
      <form action="php/enviarmensaje.php" method="POST"  id="form1" name="form1" novalidate>
        <h3>Manda un mensaje a <?php echo $nombre_receptor ?> </h3>
        <div class="wrap">
        <input type="hidden" name="nombre_receptor" id="nombre_receptor" value="<?php echo $nombre_receptor ?>">
        <input type="hidden" name="id_usuario_receptor" id="nombre_receptor" value="<?php echo $id_usuario_receptor ?>">
        <input type="hidden" name="nombre_emisor" id="nombre_emisor" value="<?php  echo $_SESSION["usuario"] ?>">
       <input type="hidden" name="id_usuario_emisor" id="nombre_emisor" value="<?php  echo $_SESSION["id_usuario"] ?>"> 
        <input name="fecha" type="hidden" id="fecha" value="<?php echo $hoy; ?>"/>
            <div> 
            	<div >
               
               <textarea name="texto" id="texto" style="width:500px; height:200px;"  > Escribe el mensaje</textarea>
                </div>
            
                
                
            </div>
            
            <div class="center">
            
            <input class="paginate" type="submit" value="Enviar" onclick="return MM_validateForm()" name="submit" />
        	</div>
            
         </div>
     </form>
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
