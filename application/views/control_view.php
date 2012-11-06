<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>CTIN | Centro de Tecnologia e innovacion</title>
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/main.css">

		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>select/select2.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/datepicker.css" >
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/estilo.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/control.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/fonts.css" >
	</head>

	<body>

		<header>

			<div id="cont">
				<div id="ctin">
					<a href="index.php">
						<br>
					</a> 
				</div>
			</div>

			<div id="controles">

			</div>
		</header>

		<div class="container">
			<div class="span12">
				<h2>Panel de control matadero</h2>
				<form class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="inputtitle">Titulo</label>
						<div class="controls">
							<input type="text" id="inputtitle" placeholder="titulo">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="inputEmail">Fecha del evento</label>
						<div class="controls">
							<input type="text" id="inputfecha">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="participantes">Participantes</label>
						<div id="list" class="controls">
							<select id="e9" class="chosen span5" multiple="true" >
								<?php
								foreach ($usuarios as $row):
									echo "<option>" . $row["Nombre"] . " - " . $row["Experto"] . "</option>";
								endforeach;
								?> 
							</select>
							
						</div>
					</div>
					<button id="participantesbtn" type="submit" class="btn">Aceptar</button>
				</form>
			</div>
		</div>

		<script src="<?= base_url() ?>/js/vendor/jquery-1.8.0.min.js"></script>
		<script src="<?= base_url() ?>/select/select2.min.js"></script>
		<script src="<?= base_url() ?>/js/vendor/datepicker.js"></script>
		<script src="<?= base_url() ?>/js/plugins.js"></script>
		<script>
			jQuery(document).ready(function(){
				$("#e9").select2({maximumSelectionSize: 10});
				$("#inputfecha").datepicker();
			});
		</script>

	</body>
</html>
