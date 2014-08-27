<br><br><br>
<div class="container">
<div class="panel panel-primary">
  <form class="form-horizontal" role="form" action="<?php echo base_url('index.php/usuarios/cambios'); ?>" method="post">
    <center><h1>Usuarios</h1></center>
    <div class="form-group">
      <label for="inputusuario" class="col-sm-2 control-label">Usuario</label>
      <div class="col-sm-9">

<input type="hidden" id="inputOculto" name="inputOculto" value="<?php echo $registros_usuarios[0]['id'];?> ">
        <input type="text" value="<?php echo $registros_usuarios[0]['usuario']; ?>" class="form-control" id="inputusuario" name="inputusuario" placeholder="usuario">

      </div>
    </div> 
    <div class="form-group">
      <label for="inputclave" class="col-sm-2 control-label">Clave</label>
      <div class="col-sm-9">

<input type="hidden" id="inputOculto" name="inputOculto" value="<?php echo $registros_usuarios[0]['id'];?> ">
        <input type="text" value="<?php echo $registros_usuarios[0]['clave']; ?>" class="form-control" id="inputclave" name="inputclave" placeholder="clave">

      </div>
    </div> 
     <div class="form-group">
      <label for="inputnombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-9">

<input type="hidden" id="inputOculto" name="inputOculto" value="<?php echo $registros_usuarios[0]['id'];?> ">
        <input type="text" value="<?php echo $registros_usuarios[0]['nombre']; ?>" class="form-control" id="inputnombre" name="inputnombre" placeholder="nombre">

      </div>
    </div> 
     <div class="form-group">
      <label for="inputapellido" class="col-sm-2 control-label">Apellido</label>
      <div class="col-sm-9">

<input type="hidden" id="inputOculto" name="inputOculto" value="<?php echo $registros_usuarios[0]['id'];?> ">
        <input type="text" value="<?php echo $registros_usuarios[0]['apellido']; ?>" class="form-control" id="inputapellido" name="inputapellido" placeholder="apellido">

      </div>
    </div> 
    <div class="form-group">
      <label for="inputcorreo" class="col-sm-2 control-label">Correo</label>
      <div class="col-sm-9">

<input type="hidden" id="inputOculto" name="inputOculto" value="<?php echo $registros_usuarios[0]['id'];?> ">
        <input type="text" value="<?php echo $registros_usuarios[0]['correo']; ?>" class="form-control" id="inputcorreo" name="inputcorreo" placeholder="correo">

      </div>
    </div>
      <div class="form-group">
      <label for="inputedad" class="col-sm-2 control-label">Edad</label>
      <div class="col-sm-9">

<input type="hidden" id="inputOculto" name="inputOculto" value="<?php echo $registros_usuarios[0]['id'];?> ">
        <input type="text" value="<?php echo $registros_usuarios[0]['edad']; ?>" class="form-control" id="inputedad" name="inputedad" placeholder="edad">

      </div>
    </div> 
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-9">
        <button type="submit" class="btn btn-default">Guardar</button>
        <button type="reset" class="btn btn-default">Cancelar</button>
      </div>
    </div>
  </form>
</div>