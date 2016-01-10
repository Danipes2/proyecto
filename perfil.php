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
     <!-- DATATABLES -->
	
      	<link rel="stylesheet" type="text/css" href="datatables/css/DT_bootstrap.css"/>
      	<link rel="stylesheet" type="text/css" href="datatables/css/jquery.jgrowl.css"/>


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
      <li class="active"><a href="perfil.php">Informacion Personal</a></li>
      <li><a href="perfil_trayectos.php">Trayectos</a></li>
      <li><a href="perfil_cambiarcontra.php">Cambiar Contraseña</a></li>
       <li><a href="perfil_darsedebaja.php">Darse de baja</a></li>
      </ul>
    
    </div>
     <div class="" style="width:80%; float:left;">
            <div class="div1form">
      <form action="php/perfil.php" method="POST" novalidate>
        <h3>Datos de Usuario</h3>
        <div class="wrap">
        		 <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id_usuario"] ?>" />
           <div  >
                <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION["usuario"] ?>" />
                
              </div>
        
            <div  >
                <input type="text" name="apellidos" id="apellidos" value="<?php echo $_SESSION["apellidos"] ?>" />
                
              </div>
            
             <div  >
               
                <?php 
				if($_SESSION["sexo"]=="hombre"){ ?>
                Hombre <input  type="radio" name="sexo" id="sexo" value="hombre" checked style="width:auto"/>
                Mujer<input  type="radio" name="sexo" id="sexo" value="mujer" style="width:auto"/>
				 <?php } 
				else {?>
					  Hombre
                <input maxlength="9" type="radio" name="sexo" id="sexo" value="hombre" style="width:auto" />
                Mujer <input maxlength="9" type="radio" name="sexo" id="sexo" value="mujer" checked style="width:auto"/>
					<?php }?> 
				
				
				
              </div>
              <div >
                <input type="text" name="email" id="email" value="<?php echo $_SESSION["email"] ?>" />
               
              </div>
              
              <div>
                <input type="text" name="telefono" id="telefono" value="<?php 
				if($_SESSION["telefono"]==0){ 
				echo "Escribe un telefono valido";} 
				else echo $_SESSION["telefono"] 
				?>" />
               
            </div>
            <div>
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php 
				if($_SESSION["fecha_nacimiento"]==0){ 
				echo "Escribe Tu fecha de nacimiento, 00/00/0000";} 
				else echo $_SESSION["fecha_nacimiento"];
				?>" />
               
            </div>
            <div> 
            Selecciona tu localidad:
				<select name="localidad1" >
                              <option ><?php echo $_SESSION["localidad"]; ?></option>
                                <?php while ($reg1=mysql_fetch_array($localidades))
                     { ?>
                     	  
                           <option id="localidad1"><?php echo $reg1['nombre'];?></option>  
                     <?php }?>  
                                  </select>
				
                
                           
                                  
                
            </div>
            <!--
            <div>
            Tu Puntuacion actual es: <?php echo $_SESSION["valor_opiniones"]; ?>
            </div>-->
           
            <div>
            Escribe una breve descipcion.
            <textarea name="texto" id="texto" style="width:480px; height:150px;" ><?php echo $_SESSION["texto"];?></textarea>
                
               
            </div>
           
            
            
            <div class="center">
            
           		 <input class="paginate" type="submit" value="Guardar Cambios" name="submit" />
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
