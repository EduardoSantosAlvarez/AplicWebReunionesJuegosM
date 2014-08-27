<br><br><br>



	<h1><p class="text-center"></p></h1>
	<div class="container">
	<div class="well">
		

      <form role="form" class="form-signin" action="<?php echo base_url('index.php/login/validar'); ?>" method="post">

       <h1><p class="text-center">Inicio de sesión</p></h1>


        <div class="input-group">
	 	<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
		<input type="text" autofocus="" required="" placeholder="usuarios" class="form-control" id="inputUsuario" name="inputUsuario">
				</div>

		<div class="input-group">
	 	<span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
		<input type="password" required="" placeholder="clave" class="form-control" id="inputClave" name="inputClave">
		</div>

       <br>
        <button type="submit" class="btn btn-lg btn-primary btn-block"> Entrar <i class="fa fa-sign-in fa-fw"></i></button>
      </form>
    </div>
</div>
</body>




