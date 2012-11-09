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

        <link rel="stylesheet" href="<?= base_url() ?>css/normalize.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/main.css">

		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/bootstrap.css">
		<link rel="stylesheet" href="<?= base_url() ?>font/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/estilo.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/fonts.css">
	</head>

	<body>
		<?php
			$this->load->view("header");
		?>
		
		<div class="container">
			<div id="video">
				<div class="row">
					<div class="span12">
						<h2> 
							<?php
							//foreach ($matadero as $row):
							echo "" . $matadero[0]["titulo"] . "";
							//endforeach;
							?>
						</h2>
					</div>
					<div class="span7">
						<div class="row">
							<div class="span7">
								<iframe src="https://www.ustream.tv/embed/10584536" width="550" height="335" scrolling="no" frameborder="0">
								</iframe>
							</div>
							<div class="span7">
								<p class="lead">Fecha:<?php
							//foreach ($matadero as $row):
							echo " " . $matadero[0]["fecha"] . "";
							//endforeach;
							?></p>
							</div>
						</div>
						<br/>
					</div>


					<div class="span5">
						<a class="twitter-timeline" data-dnt=true href="https://twitter.com/search?q=%23ctintelmex" data-widget-id="259349084916285440">Tweets sobre "#ctintelmex"</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


					</div>
				</div>
			</div>
			<div id="participantes">
				<div class="row">
					<div class="span12 cuadrocontainer">
						<div class="center"><h2>Participantes</h2></div>
						<div class="row">

							<?php
							$c = 0;
							foreach ($user as $usuario):
								if ($c == 0 || $c == 5)
									echo '<div class="offset1 span2 contain">';
								else
									echo '<div class="span2 contain">';
								echo '<div class="dude">';
								echo '<img src="http://ctintelmex.com/' . $usuario['Foto'] . '">';
								echo '</div>';
								echo '<div class="inner">';
								$nombre = explode(" ", $usuario["Nombre"]);
								echo '<p><strong>' . $nombre[0] . '</strong></p>';
								echo '<p>' . $usuario["Experto"] . '</p>';
								echo "</div>";
								echo '<div class="plop"></div>';
								echo "</div>";
								$c++;
							endforeach;
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="<?= base_url() ?>js/vendor/jquery-1.8.0.min.js"></script>
		<script src="<?= base_url() ?>js/plugins.js"></script>
		<script src="<?= base_url() ?>js/main.js"></script>
	</body>
</html>
