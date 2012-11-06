<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title> Integrantes</title>
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?= base_url() ?>css/normalize.css">
		<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul id="contenedor-desc" class="thumbnails">
						<?php
						foreach ($usuarios as $row):
							?>
							<li class="span4">
								<div class="thumbnail">
									<img src="http://ctintelmex.com/<?= $row['Foto'] ?>">
									<h3>
										<? echo "" . $row['Nombre'] ?>
									</h3>
									<p>
										<? echo "Correo: " . $row['Correo'] ?>
									</p>
									<p>
										<? echo "Experto En: " . $row['Experto'] . ""; ?>
									</p>
									<p>
										<? echo"Fecha De Ingreso: " . date('d-m-Y H:i:s', $row['Ingreso']) . "<br>"; ?>
									</p>
								</div>
							</li>
						<? endforeach; ?>
					</ul>
				</div>
			</div>
		</div>

		<script src="<?= base_url() ?>js/vendor/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>js/vendor/equalize.min.js"></script>
		<script type="text/javascript">
			$("#contenedor-desc").equalize()
		</script>
	</body>
</html>