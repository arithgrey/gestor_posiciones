<!--Modal para administrar las posiciones -->
<div class="modal fade" id="posiciones_modal" data-backdrop="static" 
   data-keyboard="false" >	
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   <span aria-hidden="true">
				    &times;
				   </span>
			  </button>
			  <h4 class="modal-title" id="myModalLabel">
			    Actualizar datos de la posición
			  </h4>
			</div>
			 <div class="modal-body">         
				<form id='form-update-ip' class='form-update-ip' method='post' action='controller/mod.php' >					
						<div class='col-lg-2 col-md-2 col-sm-12'>
							<div class="form-group">
								<label>
									ip
								</label>
								<input type="text" class="form-control" id="ip" name='ip'>
							</div>
						</div>						
						<input type="hidden" class="form-control" id="modelo" name='modelo'>
						<div class='col-lg-3 col-md-3 col-sm-12'>
							<div class="form-group">
								<label for="modelo">
									Modelo tel
								</label>
								<select name='modelo_telefono' class="form-control modelo_telefono" id="modelo_telefono"  >
									<option value='-'>
										-
									</option>
									<option value='9608'>
										9608
									</option>
									<option value='1616-l'>
										1616-l
									</option>								
								</select>								
								
							</div>
						</div>
						<div class='col-lg-2 col-md-2 col-sm-12'>
							<div class="form-group">
								<label >
									Extensión
								</label>
								<input type="number" class="form-control" name='ext' id="ext">
							</div>
						</div>
						<div class='col-lg-3 col-md-3 col-sm-12'>
							<div class="form-group">
								<label >
									Servidor aes
								</label>
								<?=get_select_aes()?>
							</div>
						</div>	
						<div class='col-lg-2 col-md-2 col-sm-12'>
							<div class="form-group">
								<label >
									Pbx
								</label>
								<?=get_select_pbx()?>
								<input type='hidden' name='posicion' id='dinamic_pos'>
							</div>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12'>
							<div class='col-lg-12 col-md-12 col-sm-12'>
								<div class='registrando' style="display:none;">
									<h3>
										Registrando cambios  ....
									</h3>
							        <div class="progress progress-striped active page-progress-bar">
							            <div class="progress-bar" style="width: 100%;">
							            </div>
							        </div>
							    </div>    
								<label class='load_pos' id='load_pos' style='display:none;'>						
									<h3>
										Cargando ....
									</h3>
							        <div class="progress progress-striped active page-progress-bar">
							            <div class="progress-bar" style="width: 100%;">
							            </div>
							        </div>
								</label>
							</div>

							<button type="button" class="update-ip-ext btn btn-primary">
								Guardar cambios
							</button>
						</div>	
				</form>
			 </div>
			<div class="modal-footer">			  
			</div>
		</div>
	</div>
</div>	 
<!--Formalario de exportación-->



























<!--Modal eliminar los datos de la posicion inicia -->
<div class="modal fade" id="posiciones_del_modal" data-backdrop="static" 
   data-keyboard="false" >	
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   <span aria-hidden="true">
				    &times;
				   </span>
			  </button>
			  <h4 class="modal-title" id="myModalLabel">
			    Eliminar datos de la posición
			  </h4>
			</div>
			 <div class="modal-body">         

			 	<div  class='row'>
			 		<label>
			 			Realmente quiere eliminar los datos de la posición
			 		</label>				 	
					<button type="button" class="btn btn-danger" id='eliminar-pos'>
						Eliminar 
					</button>				
				</div>
			 </div>
			 <div class="modal-footer">			  
			 </div>
		</div>
	</div>
</div>	

<!--Modal eliminar los datos de la posicion termina-->


<?php require "views/log_actividades.php" ?>


<?php 


	function get_select_aes(){
		$ipaes = array(
			"-",
			"172.64.13.50",
			"172.86.8.10",
			"172.86.8.11",
			"172.86.8.12",
			"172.86.8.13",
			"172.86.8.6",
			"172.86.8.8",
			"172.86.8.9");

		$select_aes =  '<select  name="srv_aes"  id="srv_aes"  class="srv_aes form-control"  >'; 
		for ($x=0; $x <count($ipaes) ; $x++) { 
			$select_aes .=	"<option value='".$ipaes[$x]."'>". $ipaes[$x]."</option>";
		}
		$select_aes .=  "</select>";
		return  $select_aes;
	}
	/**/
	function get_select_pbx(){
		
		$pbx = array("M1", "M2","M3","M4 ","V2");
		$select_pbx =  '<select  name="srv_pbx"  id="srv_pbx"  class="srv_pbx form-control"  >'; 
		for ($x=0; $x <count($pbx) ; $x++) { 
			$select_pbx .=	"<option value='".$pbx[$x]."'>". $pbx[$x]."</option>";
		}
		$select_pbx .=  "</select>";
		return  $select_pbx;	
	}
?>

