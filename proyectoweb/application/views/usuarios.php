<br><br><br>
<div class="container">

<form class="form-inline" role="form">
  <div class="form-group">
        <label class="sr-only" for="buscar">Buscar</label>
	    <input type="text" class="form-control" id="buscar" placeholder="Buscar...">
	  </div>
 	  <div class="form-group">
    	<label class="sr-only" for="mostrar">Mostrar</label>
	    <input type="text" class="form-control" id="mostrar" placeholder="cuantos..." value=10>
	  </div>
	  </form>

	  <div id="contenido">
	<div class="panel panel-primary">
<h3 class="panel-title"><h1 class="text-center">Usuarios</h1>
    </div>

	<button id="btn_altas" class="btn btn-info  pull-right glyphicon glyphicon-plus">Altas</button>
 
 <div id="contenido">
 <table class="table">
	    <thead>
	      <tr>
	        <th>Usuario</th>
	        <th>Clave</th>
	        <th>Nombre</th>
	        <th>Apellido</th>
	        <th>Correo</th>
	        <th>Edad</th>
	        <th>Accion</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<!-- Renglones -->
	    	<?php
	    	foreach ($registros as $renglon) {
	    	?>
	    	<tr>
	    		<td><?php echo $renglon['usuario'];?></td>	    		
	    		<td><?php echo $renglon['clave'];?></td>	
	    		<td><?php echo $renglon['nombre'];?></td>	    		
	    		<td><?php echo $renglon['apellido'];?></td>
	    		<td><?php echo $renglon['correo'];?></td>
	    		<td><?php echo $renglon['edad'];?></td>
	    		
	    		<td>
							<div class="btn-group">
					          <a class="btn btn-info" href="#">Selecciona</a>
					          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
					            <span class="fa fa-hand-o-down"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="<?php echo base_url('index.php/usuarios/cambios/').'/'.$renglon['id'];?>"><i class="fa fa-pencil fa-fw"></i> Cambios</a></li>
					            <li class="divider"></li>
					            <li><a href="<?php echo base_url('index.php/usuarios/bajas/').'/'.$renglon['id'].'?'."usuarios=".$renglon['usuario']; ?>" onclick="return confirm('¿Esta seguro de  Eliminar este Usuario?');"><i class="fa fa-trash-o fa-fw"></i> Bajas</a></li>
                            </ul>
					        </div>
           	 			</td>
	    	</tr>
	    	<?php
	    	 }  
	    	?>
	    	</tbody>
		</table>
	</div>
</div>
	
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Alta de Usuario</h4>
      </div>
      <div class="modal-body">
        <!-- aqui se debe poner el formulario para las altas -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btn_guardar" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	$(document).on("ready",inicio_busqueda);
	$(document).on("ready",inicio_usuarios);
</script>