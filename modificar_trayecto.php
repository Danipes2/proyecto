<?php require_once('funciones/sesiones.php'); ?>
<?php require_once('funciones/sacalocalidad.php'); ?>
<?php 
$id_trayecto=mysql_real_escape_string($_REQUEST['id']);


$query_Recordset1 = "SELECT * FROM trayectos WHERE id_trayecto='".$id_trayecto."' ";
	$Recordset1 = mysql_query($query_Recordset1, $objCn) or die(mysql_error());
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($Recordset1);
	
	$id_trayecto= $row_Recordset1['id_trayecto'];
	
	
?>
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
   
  
  
  </head>
  <body>
       <nav class="navbar navbar-default" role="navigation">
          <!-- El Enlazados y el icono que despliega el menú se agrupan
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
      <form action="php/modificar_trayecto.php" method="POST" novalidate>
        <h3>Modifica tu trayecto</h3>
        <div class="wrap">
        		<div  >
                <input type="hidden" name="id_trayecto" id="id_trayecto" value="<?php echo $row_Recordset1['id_trayecto']; ?>" />
                <input type="hidden" name="ofertante" id="ofertante" value="<?php echo $_SESSION["usuario"]; ?>" />
                <input type="hidden" name="id_ofertante" id="id_ofertante" value="<?php echo $_SESSION["id_usuario"]; ?>" />
              </div>
                
            <div> 
                 Cambiar Zona de salida:
                
                 
                                <select name="localidad1">
                                <option ><?php echo $row_Recordset1['localidad'];?></option>
                                <?php while ($reg1=mysql_fetch_array($localidades))
                     { ?>
                           <option ><?php echo $reg1['nombre'];?></option>  
                     <?php }?>  
                                  </select>
                
            </div>
        
            <div>
            	Cambiar Centro de estudio
                         <select name="institutos">
                         <option ><?php echo $row_Recordset1['instituto'];?></option>
                                <?php while ($reg2=mysql_fetch_array($institutos))
                     { ?>
                           <option><?php echo $reg2['nombre'];?></option>  
                     <?php }?>  
                                  </select>
            </div>
            
             <div  >
             Cambiar Hora de Salida
                <input type="text" name="horariosa" id="horariosa" value="<?php echo $row_Recordset1['horario_ida']; ?>" />
               
              </div>
              <div >
              Cambiar Hora de vuelta
                <input type="text" name="horariovu" id="horariovu" value="<?php echo $row_Recordset1['horario_vuelta']; ?>" />
              
              </div>
              <div>
              Cambiar precio por asiento
                <input type="text" name="precio" id="precio" value="<?php echo $row_Recordset1['precio']; ?>" />
                
            </div>
            
            <div>
            Cantidad de asientos
                <select name="asientos">
                           <option selected> <?php echo $row_Recordset1['asientos']; ?> </option>    
                           <option id="asientos"> 1</option>  
                           <option id="asientos"> 2</option> 
                           <option id="asientos"> 3</option> 
                           <option id="asientos"> 4</option> 
                           
                       
                                  </select>
          
            </div>
            
            <div class="center">
            
           		 <input class="paginate" type="submit" value="Modificar Trayecto" name="submit" />
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
