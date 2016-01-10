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
	
      <!-- DATATABLES -->
	
      	<link rel="stylesheet" type="text/css" href="datatables/css/jquery.dataTables.min.css"/>
    
        <script src="datatables/js/jquery-1.11.3.min.js"></script>
          <script src="datatables/js/jquery.dataTables.min.js"></script>
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
                    "sAjaxSource": "datatables/php/mensajes.php",
                    "oLanguage": {
                    "sUrl": "datatables/language/datatables.spanish.txt"
                    },
                    
                    "aoColumns": [
                      
					  	
                        //{ "mData": "id_mensajes","bVisible": false },
						{ "mData": "asunto","sWidth":"250px" },
						{ "mData": "fecha" ,"sWidth":"45px" },
						{ "mData": "usuario_emisor" ,"sWidth":"45px" },
						
                        { "mData": "id_usuario_emisor",
                            "mRender": function(data, type, full){
                                return '<a href="enviar_mensaje.php?id='+data+'"><button class="btn btn-info editarbtn" ><i class="icon-white icon-pencil"></i> Contestar </button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        },
                        { "mData": "id_mensajes",
                            "mRender": function(data, type, full){
                                return '<a href="php/borrar_mensaje.php?id='+data+'" onclick="return MM_validateForm()"><button class="btn btn-warning borrarbtn" ><i class="icon-white icon-trash"></i> Eliminar</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        }
                       
                    ]
       
                });
				
				
	});
				
</script>
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
              var mitabla = $('#example2').DataTable( {
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "datatables/php/mensajes_enviados.php",
                    "oLanguage": {
                    "sUrl": "datatables/language/datatables.spanish.txt"
                    },
                    
                    "aoColumns": [
                      
					  	
                        //{ "mData": "id_mensajes_enviados","bVisible": false },
						{ "mData": "asunto","sWidth":"250px" },
						{ "mData": "fecha" ,"sWidth":"45px" },
						{ "mData": "usuario_receptor" ,"sWidth":"45px" },
						
                        { "mData": "id_usuario_receptor",
                            "mRender": function(data, type, full){
                                return '<a href="enviar_mensaje.php?id='+data+'"><button class="btn btn-info editarbtn" ><i class="icon-white icon-pencil"></i> Contestar </button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        },
                        { "mData": "id_mensajes_enviados",
                            "mRender": function(data, type, full){
                                return '<a href="php/borrar_mensaje_enviado.php?id='+data+'" onclick="return MM_validateForm()"><button class="btn btn-warning borrarbtn" ><i class="icon-white icon-trash"></i> Eliminar</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        }
                       
                    ]
       
                });
				
				
	});
				
</script>
  <script language="JavaScript" type="text/javascript">
function MM_validateForm() { //v4.0
if (confirm("¡SE DISPONE A BORRAR EL MENSAJE, ESTAS SEGURO?! \n Pulse Cancelar si no es esa su intención")){
return true
  }else{
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
     
   <h1> Mensajes Recibidos </h1>
       <table id="example" class="table display  table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Asunto</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Contestar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
      
    
        <h1> Mensajes Enviados </h1>
       <table id="example2" class="table display  table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Asunto</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Enviar Mensaje</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
      
    
    
    
    </div>
    
  
    
    
    
    
    

  
  </body>
  
  
  
  
  <footer>
  
          <a class="btn btn-social-icon btn-facebook" ><i class="fa fa-facebook"></i></a>
          <a class="btn btn-social-icon btn-google" ><i class="fa fa-google-plus"></i></a>
          <a class="btn btn-social-icon btn-twitter" ><i class="fa fa-twitter"></i></a>           
            
      
</footer>
</html>
