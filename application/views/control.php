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

        <link rel="stylesheet" href="<?=base_url() ?>css/normalize.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/main.css">

		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>select/select2.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/estilo.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/control.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/fonts.css" >
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
				<form class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Titulo</label>
						<div class="controls">
							<input type="text" id="inputtitle" placeholder="titulo">
							<button type="submit" class="btn">Aceptar</button>
						</div>
					</div>
				</form>
			</div>

			<div class="span12">
				<form class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="participantes">Participantes</label>
						<div id="list" class="controls">

						</div>
					</div>
				</form>
			</div>
		</div>

		<script src="<?=base_url() ?>/js/vendor/jquery-1.8.0.min.js"></script>
		<script src="<?=base_url() ?>/select/select2.min.js"></script>
		<script src="<?=base_url() ?>/js/plugins.js"></script>
		<script>
			jQuery(document).ready(function(){
				makeInput()
				setThings()
			});
			
			function setThings(){
				$("#list").on("click","#participantes",function(){
					sendData()
				})
			}
			
			function makeInput(){
				$.ajax({
					type: "POST",
					url: "class/data.php",
					dataType: "json",
					success: makelist,
					error: showerror
				});
			}
			
			function makelist(datos){
				
				var resul = '<select id="e9" class="chosen span5" multiple="true" >'
				var experto
				$.each(datos, function(i,item){
					experto = item.Experto === null? "ND" : item.Experto
					resul += "<option>"+item.Nombre+" - "+experto+ "</option>";
				})
				resul += "</select>"
				resul += '<button id="participantes" type="submit" class="btn">Aceptar</button>'
				$("#list").append(resul);
				$("#e9").select2({maximumSelectionSize: 10});
			}
			
			function showerror(e,r,t){
				console.log(""+e+", "+r+", "+t)
			}
		</script>

	</body>
</html>
