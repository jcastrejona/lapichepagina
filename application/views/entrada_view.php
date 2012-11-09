<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CTIN | Centro de Tecnologia e Innovacion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?= base_url() ?>css/normalize.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/main.css">
		<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
		<link rel="stylesheet" href="<?= base_url() ?>font/stylesheet.css">
		<link rel="stylesheet" href="<?= base_url() ?>css/medios.css">

        <script src="<?= base_url() ?>js/vendor/modernizr-2.6.1.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<?php
			$this->load->view("header");
		?>
		
		<div class="container">
			<?php
			echo "<div class='entrada'>";
			echo "<h3>" . $entrada["etitle"] . "</h3>";
			echo "" . $entrada["ecue"] . "";
			//duda de MVC
			$this->load->model('medios_model');
			$autor = $this->medios_model->gauthor($entrada['eaut']);
			echo "<p><small>Fecha: " . date('d-m-Y H:i:s', $entrada['efec']) . "</small></p>";
			echo "<p><small>Autor: " . $autor['auser'] . " ~ " . $autor['aname'] . "</small></p>";
			echo "</div>";
			?>
		</div>

		<script src="<?= base_url() ?>js/vendor/jquery-1.8.0.min.js"></script>
		<script src="<?= base_url() ?>js/plugins.js"></script>
	</body>
</html>
