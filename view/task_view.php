<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url();?>/css/bootstrap/css/bootstrap.css"  rel="stylesheet">
	<link href="<?php echo base_url();?>/css/font-awesome/css/font-awesome.css"  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-2.1.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>/js/bootstrap/js/bootstrap.js"></script>
	
	<!--
	<link href="<?php echo base_url();?>/js/datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<script src="<?php echo base_url();?>/js/datetimepicker/moment-with-locales.js"></script>
	<script src="<?php echo base_url();?>/js/datetimepicker/bootstrap-datetimepicker.js"></script>
-->
 <link href="<?php echo base_url();?>/js/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url();?>/js/moment/moment.js"></script>
	<script src="<?php echo base_url();?>/js/moment/locale/es-us.js"></script>
	<script src="<?php echo base_url();?>/js/datepicker/js/bootstrap-datetimepicker.min.js"></script>
	<style type="text/css">
	   /* #left { float:left }
	    #right { float:right }*/
	</style>

	<style type="text/css">
		/*form{
			width: 50%; margin: 0 auto;
		}

		input[type="text"]{
			padding: 10px; margin-top: 10px; margin-bottom: 10px;
		}

		input[type="button"]{
			padding: 10px;
		}*/
	</style>
	<title></title>
</head>
<body> 
 
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
   <form class="form-horizontal container" role="form" name="event" ng-controller="eventFormController">
 <div class="cols-md-6">
  <div class="alert alert-success hide">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong><span class="message"></span>
  </div>
  
  <div class="alert alert-danger hide">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong><span class="message"></span>
  </div>
 </div>
 
		<h1>Create Task matus</h1>
		
    <div class="row hidden-xs">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="order_id" class="col-sm-3 col-md-3 col-lg-2 control-label">orden</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                    	<input type="text" class="form-control" id="order_id" placeholder="Ingrese su Id de orden">
                </div>
            </div>
			
			<div class="form-group">
                <label for="job_description" class="col-sm-3 col-md-3 col-lg-2 control-label">Descripcion</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                   <input type="text" class="form-control" id="job_description" value="monkey_dance5 delivery" placeholder="Ingrese su descripcion">
                </div>
            </div>
			
			<div class="form-group">
                <label for="job_pickup_phone" class="col-sm-3 col-md-3 col-lg-2 control-label">Telefono</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                  <input type="text" class="form-control"  id="job_pickup_phone" value="+50582789913" placeholder="Ingrese su telefono">
                </div>
            </div>
			
			<div class="form-group">
                <label for="job_pickup_name" class="col-sm-3 col-md-3 col-lg-2 control-label">Nombre</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                  <input type="text" class="form-control" id="job_pickup_name" value="almacen principal" placeholder="Ingrese su nombre">
                </div>
            </div>	
			
			<div class="form-group">
                <label for="job_pickup_email" class="col-sm-3 col-md-3 col-lg-2 control-label">Correo</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                 <input type="text" class="form-control" id="job_pickup_email" value="karen@gmail.com" placeholder="Ingrese su correo">
                </div>
            </div>	
			
				<div class="form-group">
                <label for="job_pickup_adress" class="col-sm-3 col-md-3 col-lg-2 control-label">Direccion</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
            <input type="text" class="form-control" id="job_pickup_adress" value="NORTH EAST 28" placeholder="Ingrese su direccion">
                </div>
            </div>
			
			<div class="form-group">
                <label for="job_pickup_latitude" class="col-sm-3 col-md-3 col-lg-2 control-label">Latitud</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
            <input type="text" class="form-control" id="job_pickup_latitude" value="" placeholder="Ingrese su latitud">
                </div>
            </div>
			
			
			<div class="form-group">
                <label for="job_pickup_longitude" class="col-sm-3 col-md-3 col-lg-2 control-label">Longitud</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
           <input type="text" class="form-control" id="job_pickup_longitude"  value="" placeholder="Ingrese su longitud">
                </div>
            </div>
			
		 
			
			      <div class="form-group">
				     <label for="job_pickup_datetime" class="col-sm-3 col-md-3 col-lg-2 control-label">Fecha</label>
					  
                     <div class='col-sm-4 input-group date' id='job_pickup_datetime'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>	
        </div>    
 
			<div class="form-group">
                <label for="pickup_custom_field_template" class="col-sm-3 col-md-3 col-lg-2 control-label">Plantilla</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
          <input type="text" class="form-control" id="pickup_custom_field_template" value="Template_1" placeholder="Ingrese su plantilla">
                </div>
            </div>
			
			
			<div class="form-group">
                <label for="pickup_quanty" class="col-sm-3 col-md-3 col-lg-2 control-label">Cantidad</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
          <input type="text" id="pickup_quanty" class="form-control" value="1" placeholder="Ingrese la cantidad">
                </div>
            </div>
			
	      <div class="form-group">
                <label for="pickup_price" class="col-sm-3 col-md-3 col-lg-2 control-label">Precio</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
          <input type="text" class="form-control" id="pickup_price" value="35" placeholder="Ingrese el precio">
                </div>
            </div>			
			
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="team_id" class="col-sm-3 col-md-3 col-lg-2 control-label">Id Equipo</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                   <input type="text" class="form-control" id="team_id" placeholder="Ingrese su Id de equipo">
                </div>
            </div>
			 <div class="form-group">
                <label for="auto_assignment" class="col-sm-3 col-md-3 col-lg-2 control-label">Asignacion</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                  	<input type="text" class="form-control"id="auto_assignment" value="0" placeholder="Ingrese su asignacion">
                </div>
            </div>
			
			<div class="form-group">
                <label for="has_pickup" class="col-sm-3 col-md-3 col-lg-2 control-label">Recoleccion</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                  <input type="text" class="form-control"id="has_pickup" value="1" placeholder="Ingrese su recoleccion">
                </div>
            </div>
			
		<div class="form-group">
                <label for="has_delivery" class="col-sm-3 col-md-3 col-lg-2 control-label">Entrega</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                 <input type="text" class="form-control"id="has_delivery" value="0" placeholder="Ingrese su entrega">
                </div>
            </div>
			
			
				<div class="form-group">
                <label for="layout_type" class="col-sm-3 col-md-3 col-lg-2 control-label">Tipo</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
                <input type="text" class="form-control"id="layout_type" value="0" placeholder="Ingrese su tipo de diseño">
                </div>
            </div>
			
				<div class="form-group">
                <label for="tracking_link" class="col-sm-3 col-md-3 col-lg-2 control-label">Rastreo</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
               <input type="text" class="form-control"id="tracking_link" value="1" placeholder="Ingrese su Id de rastreo">
                </div>
            </div>
			
			<div class="form-group">
                <label for="timezone" class="col-sm-3 col-md-3 col-lg-2 control-label">Zona</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
               <input type="text" class="form-control"id="timezone" value="300" placeholder="Ingrese su tiempo de zona">
                </div>
            </div>
			
			
			<div class="form-group">
                <label for="fleet_id" class="col-sm-3 col-md-3 col-lg-2 control-label">Flota</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
               <input type="text" class="form-control"id="fleet_id" placeholder="Ingrese su Id de flota">
                </div>
            </div>
			
			
			<div class="form-group">
                <label for="p_ref_images" class="col-sm-3 col-md-3 col-lg-2 control-label">Imagenes</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
              <input type="text" class="form-control"id="p_ref_images" placeholder="Ingrese su referencia de imagenes">
                </div>
            </div>
			
			<div class="form-group">
                <label for="notify" class="col-sm-3 col-md-3 col-lg-2 control-label">Notificacion</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
            <input type="text" class="form-control"id="notify"  value="0" placeholder="Ingrese su notificacion">
                </div>
            </div>
			
			<div class="form-group">
                <label for="tags" class="col-sm-3 col-md-3 col-lg-2 control-label">Tags</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
           	<input type="text" class="form-control"id="tags" placeholder="Ingrese su tags">
                </div>
            </div>
			
			
				<div class="form-group">
                <label for="geofence" class="col-sm-3 col-md-3 col-lg-2 control-label">Referencia</label>
                <div class="col-sm-9 col-md-6 col-lg-5">
           	<input type="text" class="form-control"id="geofence" value="0" placeholder="Ingrese su geo referencia">
                </div>
            </div>

        </div>
    </div>
	<div class="row hidden-xs">
 
	<a id="btnenviar" class="btn btn-success mb-1 editar" onclick="enviar_datos_ajax();"><i class="icon-fixed-width icon-save"></i> Guardar </a>
	</div>
</form>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
      <div class="row d-flex justify-content-center">
<div class="col-lg-12">
  
				<h1 class="page_title">List Task</h1>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<table id="tblPD" style="width:100%" class="table table-striped table-hover">
        		<thead>
        			<th class="text-center">Id de Orden</th>
        			<th class="text-center">Id de usuario</th>
						<th class="text-center">Id de equipo</th>
						<th class="text-center">Id de trabajo</th>
						<th class="text-center">Direccion</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Estado</th>
						<th class="text-center">Entrega</th>
						<th class="text-center">Tiempo de creacion</th>
						<th class="text-center">Acciones</th>

						<!-- <th class="text-center">Orden</th>
						<th class="text-center">Descripcion</th>
						<th class="text-center">Telefono</th>
						<th class="text-center">Nombre</th>
						<th class="text-center">Correo</th>
						<th class="text-center">Latitud</th>
						<th class="text-center">Longitud</th>
						<th class="text-center">Plantilla</th>
						<th class="text-center">Meta data</th>
						<th class="text-center">Asignacion</th>
						<th class="text-center">Recoleccion</th>
						<th class="text-center">Entrega</th>
						<th class="text-center">Diseño</th>
						<th class="text-center">Rastreo</th>
						<th class="text-center">Zona</th>
						<th class="text-center">Flota</th>
						<th class="text-center">Imagenes</th>
						<th class="text-center">Notificacion</th>
						<th class="text-center">Tags</th>
						<th class="text-center">Geo referencia</th> -->
        		</thead>
        	 
        	</table>
			</div>
			</div>
			</div>

  </div>
</div>

 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modalconfirm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
      </div>
	  <div class="modal-body">
         <span id="messageJob"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-btn-si">Si</button>
        <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
      </div>
    </div>
  </div>
</div>

 <div class="modal fade" tabindex="-1" role="dialog"  id="modalviewtask">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit task</h4>
      </div>
	  <div class="modal-body">
        
          <form class="form form-horizontal" role="form" id="ma-form">
            
              <div class="form-group">
                <span style="color:">
                  <label for="AUTHGRP" class="col-xs-3 control-label">Orden</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="AUTHGRP" id="AUTHGRP" placeholder="AuthorizGroup">
                  
                </div>
              </div>
            
              <div class="form-group">
                <span style="color:">
                  <label for="DESCRIPT" class="col-xs-3 control-label">usuario</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="DESCRIPT" id="DESCRIPT" placeholder="Description">
                  
                </div>
              </div>
            
              <div class="form-group">
                <span style="color:">
                  <label for="OBJECTTYPE" class="col-xs-3 control-label">Equipo</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="OBJECTTYPE" id="OBJECTTYPE" placeholder="Object type">
                  
                </div>
              </div>
            
              <div class="form-group">
                <span style="color:">
                  <label for="PLANGROUP" class="col-xs-3 control-label">Planner group</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="PLANGROUP" id="PLANGROUP" placeholder="Planner group">
                  
                </div>
              </div>
            
              <div class="form-group">
                <span style="color:">
                  <label for="PLANPLANT" class="col-xs-3 control-label">Trabajo</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="PLANPLANT" id="PLANPLANT" placeholder="Planning plant">
                  
                </div>
              </div>
            
              <div class="form-group">
                <span style="color:">
                  <label for="EQUICATGRY" class="col-xs-3 control-label">Direccion</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="EQUICATGRY" id="EQUICATGRY" placeholder="EquipCategory">
                  
                </div>
              </div>
			  
			  <div class="form-group">
                <span style="color:">
                  <label for="EQUICATGRY" class="col-xs-3 control-label">Fecha</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="text" class="form-control" name="EQUICATGRY" id="EQUICATGRY" placeholder="EquipCategory">
                  
                </div>
              </div>
            
              <div class="form-group">
                <span style="color:">
                  <label for="" class="col-xs-3 control-label">Estado</label>
                </span>
                <div class="col-xs-6">
                  
                      <input type="" class="form-control" name="" id="" placeholder="">
                  
                </div>
              </div>
            
          </form>   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-check"></i> Aceptar</button>
 
      </div>
    </div>
  </div>
</div>

<script>
var fecha='<?php echo date("Y-m-d H:i");?>';
 
</script>
	<script src="<?php echo base_url();?>/js/script_config.js"></script>
	<script src="<?php echo base_url();?>/js/script.js"></script>
</body>
</html>