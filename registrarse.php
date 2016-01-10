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

    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>


    <script language="JavaScript" type="text/javascript">
function MM_validateForm() {
	
	if (document.form1.nombre.value=="" || document.form1.nombre.value==" ") {
alert ("El campo de nombre esta vacio");
return false
}
	
	if (document.form1.apellidos.value=="" || document.form1.apellidos.value==" ") {
alert ("El campo de apellidos esta vacio");
return false
}
	if (document.form1.mail.value=="" || document.form1.mail.value==" ") {
alert ("El campo mail esta vacio");
return false
}
	if (document.form1.mailv.value=="" || document.form1.mailv.value==" ") {
alert ("El campo de repetir email esta vacio");
return false
}
	if (document.form1.mail.value!=document.form1.mailv.value) {
alert ("Los emails no coinciden");
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
    <div class="div1form">
      <form action="php/registro.php" name="form1" id="form1" method="POST" novalidate>
        <h3>Registrate</h3>
        <div class="wrap">
        		
            <div> 
            	<div class="nomapll" style="width:28% !important; height:100% !important;">
                Hombre
                <input maxlength="9" type="radio" name="sexo" id="sexo" value="hombre" checked/>
                Mujer <input maxlength="9" type="radio" name="sexo" id="sexo" value="mujer"/>
                </div>
            	<div class="nomapll" style="width:70% !important;">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
                <span class="required"></span>
                </div>
                
                
                <div class="nomapll" style="width:70% !important; float:right; margin-right:2%;">
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" />
                <span class="required"></span>
                </div>
                
                
            </div>
        
            <div>
                <input type="mail" name="mail" id="mail" placeholder="E-mail" />
                <span class="required"></span>
            </div>
            <div>
                <input type="mail" name="mailv" id="mailv" placeholder="Repita su E-mail" />
                <span class="required"></span>
            </div>
            <div class="center">
            
            <input  type="submit" value="Registrarse" onclick="return MM_validateForm()" name="submit" />
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
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-validate/dist/jquery.validate.js"></script>
    <script src="js/jquery.complexify.js/jquery.complexify.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:js({app,.tmp}) scripts/main.js -->
    <script src="js/messages_es.js"></script>
    <script src="js/additional-methods.js"></script>
    <script src="js/main.js"></script>
  </body>
  
  
  
  
  <footer>
  
          <a class="btn btn-social-icon btn-facebook" ><i class="fa fa-facebook"></i></a>
          <a class="btn btn-social-icon btn-google" ><i class="fa fa-google-plus"></i></a>
          <a class="btn btn-social-icon btn-twitter" ><i class="fa fa-twitter"></i></a>           
            
      
</footer>
</html>