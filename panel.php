<?php	
	session_start();
	if($_SESSION["in_session"] !=  1 ){header("location:index.php");}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset='utf8'>	
<link rel="stylesheet" href="css/b1.css">
<link rel="stylesheet" href="css/b2.css">
<script src="js/j1.js"></script>
<script src="js/j2.js"></script>
<script src="js/j3.js"></script>
<html>
 <head>
	 <title>
	 	Control de 
	 	posiciones konecta
	 </title>  
	 <link type="text/css" href="css/manager.css" rel="stylesheet">  
 </head>   
<body>
<DIV align='center'>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" />				
	<?php include "views/header.php" ?>
	<div class='col-lg-12'>	
			<div class='contenedor_menu'>	

				<!--<div >
					<label class='estadisticas'>
						ESTADÍSTICAS
					</label>
				</div>			-->
				<div  class='selector'>
					<div class="form-group">
					 

					  <select class='form-control' id="ubicacion">
					  	<option value="MEXICO">
					  		MEXICO
					  	</option>
					  	<option value="PERU">
					  		PERU
					  	</option>			  	
					  	<option value="PERU_1">
					  		 PERU -SALA DE OPERACIÓN 1 
					  	</option>
					  	<option value="PERU_2">
					  		 PERU -SALA DE OPERACIÓN 2
					  	</option>
					  	<option value="PERU_5" >
					  		PERU - 5to piso de Lima Cargo
					  	</option>
					  </select>			  

					</div>
				</div>
			</div>	
			<div class='contenedor_charts'></div>

						
		<!--
			<div class='col-lg-1 col-md-1 col-sm-1 pull-left' >
				
				<div class='contenedor_chart'>
					<label>Estadísticas</label>
				</div>
			</div>
			<div class='pull-left col-lg-3 col-md-3 col-sm-3'>
				<div class="form-group">
				  <label for="usr">
				  País
				  </label>	

				  <select class='form-control' id="ubicacion">
				  	<option value="MEXICO">
				  		MEXICO
				  	</option>
				  	<option value="PERU">
				  		PERU
				  	</option>			  	
				  	<option value="PERU_1">
				  		 PERU -SALA DE OPERACIÓN 1 
				  	</option>
				  	<option value="PERU_2">
				  		 PERU -SALA DE OPERACIÓN 2
				  	</option>
				  	<option value="PERU_5" >
				  		PERU - 5to piso de Lima Cargo
				  	</option>
				  </select>			  

				</div>
			</div>
			<div class='pull-right col-lg-9 col-md-9 col-sm-9'>
				<div class='resumen'></div>
			</div>		
			-->
	</div>







	<div class="container-fluid" id='grid'>	  		 		
      	<!--Inicia resumen del tablero-->				
	  		<div class='container'> 
	  			<div class='response-update'>
	  			</div>
	  			<div class='img-load-panel' id='img-load-panel'>
	  			<div class="container">
					<div class="row">
						
				        <div class="progress progress-striped active page-progress-bar">
				            <div class="progress-bar" style="width: 100%;"></div>
				        </div>
				        <h3>
							Cargando ....
						</h3>
					</div>
				</div>
	  			</div>
	  			
	  		</div>
	  		<div style='overflow-y:scroll; overflow-x: none; height:550px; width:100%;'>	
	  				<div class='pasillos'>
	  				</div>
	  			</div>	  		  			
	  	<!--Termina el resumen del tablero-->						  	  		  	
	</div>




<form name='frmExcel' id='frmExcel' method="post"  action="excel.php">
	<div style='display:none;'>
		<input type="text" id="datos_a_enviar" name="datos_a_enviar" /> 
	</div>
</form>	
<!--Termina  Formulario de exportación-->
<script type="text/javascript" src='js/tablero.js'></script>
<script type="text/javascript" src='js/resument.js'></script>



<script type="text/javascript">
	$(document).ready(function(){

		ubicacion =  "MEXICO";
		campania = "Portabilidad";				
		$("footer").ready(get_plano);		
		
		$("#ubicacion").change(function(){		
			ubicacion =$("#ubicacion").val();  			
			get_plano();			
		});
		/**/
		$(".botonExcel").click(function(event) {   
			 $("#datos_a_enviar").val($("<div>").append($("#grid").eq(0).clone()).html());   
			 $("#frmExcel").submit();   
		});

		
		$(".elimina-posicion").click(datos_eliminar);			
		/*Cargamos las estadísticas*/

		$(".estadisticas").click(carga_charts);

	});
</script>
</body>







<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<style type="text/css">
.tb-pasillo{
	margin-bottom: -32767px;	  
	}
	.title-pasillo{
		background: grey;	
	}
	.mando{
		background: #286090;
		color: white;
	}
	.title-mando{
		background: #286090;
		color: white;
		width: 70px;
	}
	.table-interna-peru{
		font-size: .8em;
		margin-top: 20px;
	}
	.table-interna-peru tr{
		height: 75px !important;
	}
	.posicion_edit{
		width: 70px;		
		font-size: 1em;

	}
	.verde{
		background: green; 		
		color: white;
	}
	
	.tb-puesto-ex{
		width: 100px;
	}
	.tabl-i{
		width: 600px !important;
	}
	.puesto-p , .icon-p , .icon-faltante-p{		
		display: inline-block;
	}

	.peru-section-icon{
		vertical-align:bottom;

	}
	.td-sala-1{
		width: 80px;
		height: 50px;
	}
	.table-s-1{
		float: left;
		margin-left: 20px;		
	}
	.si-1 , .si-2{
		display: inline-block;
	}
	.s2-1 , .s2-2{
		display: inline-block;
	}

	.s2-2{
		margin-bottom: -32767px;
	}
	.chart_btn{
		margin-left: 10px;
	}
	.contenedor_menu{
		//background: rgb(15, 62, 84);

	}
	.estadisticas, .selector{
		display: inline-block;
	}
	.estadisticas{
		float: left;
	    background: #00BCD4;
	    border-radius: 2px;
	    padding: 9px;
	}
	.estadisticas:hover{
		cursor: pointer;
		float: left;
	    background: #2196f3;
	    color: white;
	    border-radius: 2px;
	    padding: 9px;
	}
	.selector{
		float: right;
	}.posicion_edit{

	}
</style>
<input type='hidden' name='dinamic_del' class='dinamic_del'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php
	/*Cargamos modals*/
	include("modals.php");
?>






