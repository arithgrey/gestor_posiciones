<?php 
	require "model/conexion72.php";
	$db_konecta = new  db_konecta();

	$sql =  "select  * from intranet.posiciones_CAC_log  where fecha =  CURRENT_DATE() and accion !=  'Salió del sessión' "; 
	$result  = $db_konecta->query_db_ext($sql); 
	
	$data_complete  = array();
	$table = "<div class='contenedor_tabla_log'>
				<table class='tabla_log'>"; 
		$table .= "<tr class='titulos'>"; 	 	
	 	$table .= $db_konecta->td("id"); 	
	 	$table .= $db_konecta->td("usr"); 	
	 	$table .= $db_konecta->td("fecha"); 	
	 	$table .= $db_konecta->td("hora"); 	
	 	$table .= $db_konecta->td("ip"); 	
	 	$table .= $db_konecta->td("tipo"); 	
	 	$table .= $db_konecta->td("accion");		
	 	$table .= "</tr>"; 	 	
	while( $row =  mysql_fetch_array($result) ) {				
		$table .= "<tr>"; 	 	
	 	$table .= $db_konecta->td($row["id"]); 	
	 	$table .= $db_konecta->td($row["usr"]); 	
	 	$table .= $db_konecta->td($row["fecha"]); 	
	 	$table .= $db_konecta->td($row["hora"]); 	
	 	$table .= $db_konecta->td($row["ip"]); 	
	 	$table .= $db_konecta->td($row["tipo"]); 	
	 	$table .= $db_konecta->td($row["accion"]);		
	 	$table .= "</tr>"; 	 	
	}	
	$table .= "</table>
				</div>"; 
?>

<?=$table?>





<style type="text/css">
.tabla_log{
	width: 100%;
}
.contenedor_tabla_log{
	text-align: center;
	height: 100%;
	overflow: scroll;
}
.titulos{
	background: #286090; color:white;
	padding: 10px;
}
</style>