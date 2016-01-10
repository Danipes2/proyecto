<?php require_once('funciones/sesiones.php'); ?>
<?php require_once('funciones/sacalocalidad.php'); ?>
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
   
   

   <script language="JavaScript" type="text/javascript">
function MM_validateForm() {
	
	if (document.form1.horariosa.value=="" || document.form1.horariosa.value==" ") {
alert ("La hora de salida no puede estar vacio");
return false
}
	
	if (document.form1.horariovu.value=="" || document.form1.horariovu.value==" ") {
alert ("La hora de vuelta no puede estar vacio");
return false
}

if (document.form1.asientos.value==="Selecciona Cantidad de Asientos") {
alert ("Debes seleccionar la cantidad de asientos");
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
      <form action="php/registrartrayecto.php" id="form1" name="form1" method="POST" novalidate>
        <h3>Busca un trayecto</h3>
        <div class="wrap">
        		<div  >
                <input type="hidden" name="ofertante" id="ofertante" value="<?php echo $_SESSION["usuario"] ?>" />
                <input type="hidden" name="id_ofertante" id="id_ofertante" value="<?php echo $_SESSION["id_usuario"] ?>" />
              </div>
                
            <div> 
                 Elije Zona de salida
                                <select name="localidad1">
                                <?php while ($reg1=mysql_fetch_array($localidades))
                     { ?>
                           <option><?php echo $reg1['nombre'];?></option>  
                     <?php }?>  
                                  </select>
                
            </div>
        
            <div>
            	 Elije Centro de estudio
                         <select name="institutos">
                                <?php while ($reg2=mysql_fetch_array($institutos))
                     { ?>
                           <option><?php echo $reg2['nombre'];?></option>  
                     <?php }?>  
                                  </select>
            </div>
            
             <div  >
                <input type="text" name="horariosa" id="horariosa" placeholder="Hora Salida" />
                <span class="required"></span>
              </div>
              <div >
                <input type="text" name="horariovu" id="horariovu" placeholder="Hora Vuelta" />
                <span class="required"></span>
              </div>
              <div>
                <input type="text" name="precio" id="precio" placeholder="Precio por Asiento" />
                
            </div>
            
            <div>
                <select name="asientos">
                           <option selected> Selecciona Cantidad de Asientos </option>    
                           <option id="asientos"> 1</option>  
                           <option id="asientos"> 2</option> 
                           <option id="asientos"> 3</option> 
                           <option id="asientos"> 4</option> 
                           
                       
                                  </select>
            <span class="required"></span>
            </div>
            
            <div class="center">
            
           		 <input class="paginate" type="submit" value="Registrar trayecto" onclick="return MM_validateForm()" name="submit" />
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
