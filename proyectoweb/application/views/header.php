<?php if($this->session->userdata('logged_in')){?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="<?php echo base_url('index.php/inicio/index'); ?>"><font><font>INICIO</font></font></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--<li><a href="<?php echo base_url('index.php/usuarios/index'); ?>">Usuarios</a></li> -->
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('index.php/login/eliminarsession'); ?>">Cerrar Sesión</a></li>
            </ul>
                      
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <?php } ?>