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
				<form action="<?= base_url() ?>index.php/ctin/setmatadero" method="post" class="form-horizontal" id="mataderoform">
					<div class="control-group">
						<label class="control-label" for="inputtitle">Titulo</label>
						<div class="controls">
							<input type="text" id="inputtitle" placeholder="titulo" name="inputtitle">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputEmail">Fecha del evento</label>
						<div class="controls">
							<input type="text" id="inputfecha" name="inputfecha">
						</div>
					</div>

					<div class="control-group">
						<p id="mensajeerror" class="control-group">

						</p>
						<label class="control-label" for="participantes">Participantes</label>
						<div id="list" class="controls">

							<select id="e9" class="chosen span5" multiple="true" >
								<?php
								foreach ($usuarios as $row):
									$habilidad = ($row["Experto"] == NULL) ? "ND" : $row["Experto"];
									echo "<option value='" . $row["Id_User"] . "'>" . $row["Nombre"] . " - " . $habilidad . "</option>";
								endforeach;
								?> 
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<input type="hidden" id="valuesusers" val="" name="valuesusers">
						</div>
					</div>

					<a id="participantesbtn" class="btn">Aceptar</a>
				</form>
			</div>
		</div>

		<script src="<?= base_url() ?>/js/vendor/jquery-1.8.0.min.js"></script>
		<script src="<?= base_url() ?>/select/select2.min.js"></script>
		<script src="<?= base_url() ?>/js/vendor/datepicker.js"></script>
		<script src="<?= base_url() ?>/js/plugins.js"></script>
		<script>
			$(document).ready(function(){
				$("#e9").select2({
					placeholder: "Busca por participantes o habilidad",
					maximumSelectionSize: 10});
				$("#inputfecha").datepicker();
				
				$("#participantesbtn").click(function(){
					var array = $("#e9").select2("val")
					if(array.length < 10){
						$("#mensajeerror").html("Selecciona 10 usuarios")
					}
					else{
						$("#valuesusers").val($("#e9").select2("val"))
						$("#mataderoform").submit()
					}
				})
			});
		</script>

	</body>
</html>
