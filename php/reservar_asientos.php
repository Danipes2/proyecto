<?php require_once('../conexiones/objCn.php'); ?>
<?php require_once('../funciones/sesiones.php'); ?>

<?php
	$id_trayecto= mysql_real_escape_string($_REQUEST['id']);
	$id_usuario_reserva=$_SESSION["id_usuario"];
	$nombre_usuario_reserva=$_SESSION["usuario"];
	
	$query_Recordset1 = "SELECT * FROM trayectos WHERE id_trayecto='".$id_trayecto."'  ";
	$Recordset1 = mysql_query($query_Recordset1, $objCn) or die(mysql_error());
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($Recordset1);
	
	$asientos= $row_Recordset1['asientos'];
	
	if($asientos>0){
			
	$asientosactualizados = $asientos-1;
	$updateSQL = "UPDATE trayectos  SET asientos='".$asientosactualizados."' WHERE id_trayecto='".$id_trayecto."' ";
	
	$Result1 = mysql_query($updateSQL, $objCn) or die(mysql_error());
	
	




	$insertSQL = "INSERT INTO reservas (horario_ida, horario_vuelta, localidad, instituto, precio, asientos, ofertante, id_ofertante, id_usuario_reserva, id_trayecto, nombre_usuario_reserva) VALUES ( '".$row_Recordset1['horario_ida']."','".$row_Recordset1['horario_vuelta']."','".$row_Recordset1['localidad']."','".$row_Recordset1['instituto']."','".$row_Recordset1['precio']."','".$asientosactualizados."','".$row_Recordset1['ofertante']."','".$row_Recordset1['id_ofertante']."','".$id_usuario_reserva."', '".$id_trayecto."', '".$nombre_usuario_reserva."')";
	
	$Result1 = mysql_query($insertSQL, $objCn) or die(mysql_error());
	
	
	
	  
  header(sprintf("Location:../perfil_trayectos.php"));
	

		
		}else{ ?> 
         <?php
$localidades=mysql_query("select id_localidades, nombre
                       from localidades
					   order by nombre ASC");
$institutos=mysql_query("select id_institutos, nombre
                       from institutos
					   order by nombre ASC");
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
    <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/maincss.css" rel="stylesheet">

    <link href="../bootstrap-social-gh-pages/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap-social-gh-pages/assets/css/docs.css" rel="stylesheet" >
	<link href="../bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet" >
  

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
                	
                
                  <li><a href="../perfil.php"><?php echo $_SESSION["usuario"] ?></a></li>
                  <li ><a href="../php/cierra.php">Cerrar Sesion</a></li>
                  <li><a href="#">Como Funciona</a></li>
                      
                </ul>
  			</div>
            
             
	</nav>
        <nav class="navbar navbar-default" role="navigation">
                    
                    <div>
                        <ul class="nav nav-justified">
                            
                          <li class="active"><a href="../buscartrayecto.php">Buscar un trayecto</a></li>
                          <li ><a href="../ofreceruntrayecto.php">Ofrecer un trayecto</a></li>
                          <li><a href="../mensajes.php">Mensajes</a></li>
                          
                          <li><a href="../perfil.php">Perfil</a></li> 
                        </ul>
                    </div>
        </nav>
   
 <div class="container contenedor" style="text-align:center">
     <div class="div1form">
      <form action="../buscartrayecto2.php" method="POST" novalidate>
        <h3>Busca un trayecto</h3>
        <div class="wrap">
        	<h1 style="color:red;"> Lo Siento, el trayecto que intentabas reservar no esta disponible ya </h1>
            <div> 
                Zona de salida
                                <select name="localidad1">
                                <?php while ($reg1=mysql_fetch_array($localidades))
                     { ?>
                           <option id="localidad1"><?php echo $reg1['nombre'];?></option>  
                     <?php }?>  
                                  </select>
                
            </div>
        
            <div>
            	Centro de estudio
                         <select name="institutos">
                                <?php while ($reg2=mysql_fetch_array($institutos))
                     { ?>
                           <option id="institutos"><?php echo $reg2['nombre'];?></option>  
                     <?php }?>  
                                  </select>
            </div>
            
            <div class="center">
            
           		 <input class="paginate" type="submit" value="Buscar" name="submit" />
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
			
			
			<?php }
	
	




?>
