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
                    "sAjaxSource": "datatables/php/trayectos.php",
                    "oLanguage": {
                    "sUrl": "datatables/language/datatables.spanish.txt"
                    },
                    
                    "aoColumns": [
                      
					  	
                        { "mData": "id_trayecto","bVisible": false },
						{ "mData": "localidad","sWidth":"100px" },
						{ "mData": "instituto" ,"sWidth":"100px" },
						{ "mData": "horario_ida" ,"sWidth":"80px" },
						{ "mData": "horario_vuelta" ,"sWidth":"80px" },
						{ "mData": "precio" ,"sWidth":"50px" },
						{ "mData": "asientos" ,"sWidth":"50px" },
						
						{ "mData": "id_trayecto",
                            "mRender": function(data, type, full){
                                return '<a href="modificar_trayecto.php?id='+data+'"><button class="btn btn-success editarbtn" ><i class="icon-white icon-pencil"></i> Modificar</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        },
                        { "mData": "id_trayecto",
                            "mRender": function(data, type, full){
                                return '<a href="php/borrar_trayecto.php?id='+data+'"><button class="btn btn-danger editarbtn" onclick="return MM_validateForm()" ><i class="icon-white icon-pencil"></i> Eliminar</button></a>';
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
                    "sAjaxSource": "datatables/php/asientos_reservados.php",
                    "oLanguage": {
                    "sUrl": "datatables/language/datatables.spanish.txt"
                    },
                    
                    "aoColumns": [
                      
					  	
                        { "mData": "id_reservas","bVisible": false },
						{ "mData": "localidad","sWidth":"100px" },
						{ "mData": "instituto" ,"sWidth":"100px" },
						{ "mData": "nombre_usuario_reserva" ,"sWidth":"100px" },
						{ "mData": "horario_ida" ,"sWidth":"80px" },
						{ "mData": "horario_vuelta" ,"sWidth":"80px" },
						{ "mData": "precio" ,"sWidth":"50px" },
						{ "mData": "id_usuario_reserva",
                            "mRender": function(data, type, full){
                                return '<a href="enviar_mensaje.php?id='+data+'"><button class="btn btn-success editarbtn" ><i class="icon-white icon-pencil"></i> Enviar Mensaje</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        },
						
                        { "mData": "id_reservas",
                            "mRender": function(data, type, full){
                                return '<a href="php/borrar_reserva.php?id='+data+'"><button class="btn btn-danger editarbtn" onclick="return MM_validateForm2()" ><i class="icon-white icon-pencil"></i> Eliminar</button></a>';
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
              var mitabla = $('#example1').DataTable( {
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "datatables/php/trayectos_reservados.php",
                    "oLanguage": {
                    "sUrl": "datatables/language/datatables.spanish.txt"
                    },
                    
                    "aoColumns": [
                      
					  	
                        { "mData": "id_reservas","bVisible": false },
						{ "mData": "localidad","sWidth":"100px" },
						{ "mData": "instituto" ,"sWidth":"100px" },
						{ "mData": "horario_ida" ,"sWidth":"80px" },
						{ "mData": "horario_vuelta" ,"sWidth":"80px" },
						{ "mData": "precio" ,"sWidth":"50px" },
						{ "mData": "asientos" ,"sWidth":"50px" },
						{ "mData": "ofertante" ,"sWidth":"50px" },
						{ "mData": "id_ofertante",
                            "mRender": function(data, type, full){
                                return '<a href="enviar_mensaje.php?id='+data+'"><button class="btn btn-success editarbtn" ><i class="icon-white icon-pencil"></i> Enviar Mensaje</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        },
						
                        { "mData": "id_reservas",
                            "mRender": function(data, type, full){
                                return '<a href="php/borrar_reserva.php?id='+data+'"><button class="btn btn-danger editarbtn" onclick="return MM_validateForm3()" ><i class="icon-white icon-pencil"></i> Eliminar</button></a>';
                            },
                            "bSortable":false,
                            "bSearchtable":false,
                            "sWidth":"85px"
                        }
                       
                    ]
       
                });
				
				
	});
				
</script>
 
 </script>
  <script language="JavaScript" type="text/javascript">
function MM_validateForm() { //v4.0
if (confirm("¡SE DISPONE A BORRAR EL TRAYECTO OFERTADO ¿ESTAS SEGURO? \n Pulse Cancelar si no es esa su intención")){
return true
  }else{ 
  return false
  }
}
function MM_validateForm2() { 
if (confirm("¡SE DISPONE A BORRAR EL OCUPANTE SELECCIONADO, ¿ESTAS SEGURO? \n Pulse Cancelar si no es esa su intención")){
return true
  }else{
  return false
  }
}
function MM_validateForm3() { 
if (confirm("¡SE DISPONE A BORRAR EL TRAYECTO RESERVADO, ¿ESTAS SEGURO? \n Pulse Cancelar si no es esa su intención")){
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
   <div class="" style="width:20%; float:left;">
      <ul class="nav nav-pills nav-stacked">
      <li ><a href="perfil.php">Informacion Personal</a></li>
      <li class="active"><a href="perfil_trayectos.php">Trayectos</a></li>
      <li><a href="perfil_cambiarcontra.php">Cambiar Contraseña</a></li>
       <li><a href="perfil_darsedebaja.php">Darse de baja</a></li>
      </ul>
    
    </div>
     <div class="" style="width:80%; float:left;">
     	<h1> Trayectos ofertados </h1>
              <table id="example" class="table display  table-striped table-bordered">
                    <thead>
                        <tr>
                        	<th>Id_trayectos</th>
                            <th>Localidad Inicio</th>
                            <th>Instituto Final</th>
                            <th>Horario Ida</th>
                            <th>Horario Vuelta</th>
                            <th>Precio</th>
                            <th>Asientos</th>
                            <th>Modificar Trayecto</th>
                            <th>Eliminar Trayecto</th>
                           
                        </tr>
                    </thead>
                   

                </table>
                
                
         	<h1> Tus asientos ocupados </h1>
              <table id="example2" class="table display  table-striped table-bordered">
                    <thead>
                        <tr>
                        	<th>Id_reservas</th>
                            <th>Localidad Inicio</th>
                            <th>Instituto Final</th>
                            <th>Nombre Ocupante</th>
                            <th>Horario Ida</th>
                            <th>Horario Vuelta</th>
                            <th>Precio</th>
                            <th>Enviar Mensaje al ocupante</th>
                            <th>Eliminar ocupante</th>
                           
                        </tr>
                    </thead>
                   

                </table>
                
                
                
           <h1> Trayectos Reservados </h1>     
                
                <table id="example1" class="table display  table-striped table-bordered">
                    <thead>
                        <tr>
                        	<th>Id_reservas</th>
                            <th>Localidad Inicio</th>
                            <th>Instituto Final</th>
                            <th>Horario Ida</th>
                            <th>Horario Vuelta</th>
                            <th>Precio</th>
                            <th>Asientos</th>
                            <th>Ofertante</th>
                            <th>Enviar Mensaje al conductor</th>
                            <th>Eliminar reserva</th>
                           
                        </tr>
                    </thead>
                   

                </table>
    
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
