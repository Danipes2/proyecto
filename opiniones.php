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
     <!-- DATATABLES -->
	
      	<link rel="stylesheet" type="text/css" href="datatables/css/DT_bootstrap.css"/>
      	<link rel="stylesheet" type="text/css" href="datatables/css/jquery.jgrowl.css"/>

    
  
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        
   		<script type="text/javascript" src="datatables/js/jquery.dataTables.js"></script>
   		<script type="text/javascript" src="datatables/js/DT_bootstrap.js"></script>
   		<script type="text/javascript" src="datatables/js/jsBoostrap/bootstrap.js"></script>
   		<script type="text/javascript" src="datatables/js/jquery.jgrowl.js"></script>
    	<script type="text/javascript" src="datatables/js/jquery.validate.js"></script>
    	<script type="text/javascript" src="datatables/js/additional-methods.js"></script>
    	<script type="text/javascript" src="datatables/js/messages_es.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script>
 
 
$.ajaxSetup({'beforeSend' : function(xhr) { 
 if (xhr.overrideMimeType) { 
 //Para Google Chrome y Firefox 
 xhr.overrideMimeType('text/html; charset=iso-8859-1'); 
 } else { 
 //Para IE8 
 xhr.setRequestHeader('Content-type', 'text/html; charset=iso-8859-1'); 
 } 
 } }); 

 
            $(document).ready(function() {
              var mitabla = $('#example').DataTable( {
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "datatables/php/opiniones.php",
                    "oLanguage": {
                    "sUrl": "datatables/language/datatables.spanish.txt"
                    },
                    
                    "aoColumns": [
                      
					  	
                        //{ "mData": "id_opiniones","bVisible": false },
						{ "mData": "asunto","sWidth":"250px" },
						{ "mData": "fecha" ,"sWidth":"45px" },
						{ "mData": "usuario_emisor" ,"sWidth":"45px" },
						{ "mData": "valor" ,"sWidth":"45px" },
						
                        { "mData": "id_opiniones",
                            "mRender": function(data, type, full){
                                return '<a href="admin_v_opiniones.php?id='+data+'"><button class="btn btn-info editarbtn" ><i class="icon-white icon-pencil"></i> Ver</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        },
                        { "mData": "id_opiniones",
                            "mRender": function(data, type, full){
                                return '<a href="admin_b_opiniones.php?id='+data+'" onclick="return MM_validateForm()"><button class="btn btn-warning borrarbtn" ><i class="icon-white icon-trash"></i> Eliminar</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        }
                       
                    ]
       
                });
				
				
	});
				
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
                          <li><a href="opiniones.php">Opiniones</a></li> 
                          <li><a href="perfil.php">Perfil</a></li> 
                        </ul>
                    </div>
        </nav>
   
 <div class="container contenedor" style="text-align:center">
     
   
       <table id="example" class="table display  table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Asunto</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>ver</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
      
    
     
    
    
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
