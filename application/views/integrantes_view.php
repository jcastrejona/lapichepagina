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
		<link rel="stylesheet" href="<?= base_url() ?>font/stylesheet.css">
		<link rel="stylesheet" href="<?= base_url() ?>css/integrantes.css">
	</head>

	<body>
		<?php
			$this->load->view("header");
		?>
		
		<div id="contenedorpin" class="container">
			<div class="row">
				<div class="span12">
					<ul id="contenedor-main" class="thumbnails">
						<?php
						foreach ($usuarios as $row):
							?>
							<li class="contenedor-desc">
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
		<script src="<?= base_url() ?>js/vendor/masonry.min.js"></script>
		<script>
			$(document).ready(function(){
				var $container = $('#contenedorpin')
				$container.imagesLoaded(function(){
					$container.masonry({
						itemSelector : '.contenedor-desc',
						isFitWidth: true
					});
				});
			})
		</script>
	</body>
</html>