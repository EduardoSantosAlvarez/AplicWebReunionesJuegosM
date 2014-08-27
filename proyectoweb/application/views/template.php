<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
	<link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('css/misccs.css'); ?>" rel="stylesheet" type="text/css">
	
	<script src="<?php echo base_url('js/jquery.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>" type="text/javascript"></script>	
    <script src="<?php echo base_url('js/misfunciones.js'); ?>" type="text/javascript"></script>	

</head>
<body>
<?php
	$this->load->view('header');
	$this->load->view($main);
	$this->load->view('footer');
?>	
</body>
</html>