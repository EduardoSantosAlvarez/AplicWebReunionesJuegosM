 <table class="table">
	    <thead>
	      <tr>
	        <th>Usuario</th>
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
	    		<td><?php echo $renglon['nombre'];?></td>	    		
	    		<td><?php echo $renglon['apellido'];?></td>
	    		<td><?php echo $renglon['correo'];?></td>
	    		<td><?php echo $renglon['edad'];?></td
	    	</tr>
	    	<?php
	    	 }  
	    	?>
	    	</tbody>
	</table>