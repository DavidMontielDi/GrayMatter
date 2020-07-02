<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gray Matter</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate HTML Template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<?php include 'generales.php'?>
	<!-- Header Section end -->

	<!-- Page top Section end -->
	<?php menuGeneral();?>
	<!-- Page top Section end -->

	<!-- Intro Section end -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<p></p>
				<div class="col-lg-6 order-lg-2">
				<p></p>
					<img src="img/about/4.jpg" alt="">
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="about-text">
					<p></p>
						<h3>Nuestro objetivo principal es el medio ambiente y el ahorro de energia.</h3>
						<p>Regular el consumo energético de las oficinas, instituciones, o algún local de negocios aprovechando únicamente lo necesario para el beneficio de la empresa, el ambiente y sus atractivos para la actividad correspondiente.</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro Section end -->

	<!-- Sell Section -->
	<section class="sell-section ">
		<div class="sell-warp spad set-bg" data-setbg="img/sell-bg.jpg">
			<div class="container text-white">
				<div class="section-title">
					<h2>A que nos dedicamos?</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="sell-item">
							<div class="si-icon"><span>01.</span></div>
							<h3>Descripcion del negocio</h3>
							<p>Desarrollar un software para capturar entradas y salidas del personal, según la necesidad del cliente y al mismo tiempo reducir el consumo de energía eléctrica en las instalaciones por medio de tarjetas y un control manual contando con una base de datos en la cual brindara un registro total de los datos consumidos.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sell-item">
							<div class="si-icon"><span>02.</span></div>
							<h3>Mision</h3>
							<p>Ofrecer la más alta calidad en nuestro producto y de ahorro de energía a través de un sistema aprovechando las posibilidades que nos da la tecnología, buscando así mejorar la economía y bienestar de nuestros clientes, sociedad y el medio ambiente.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sell-item">
							<div class="si-icon"><span>03.</span></div>
							<h3>Vision</h3>
							<p>Para el año 2025 posicionarnos en el mercado internacional siendo una empresa establecida logrando expandir nuestros servicios en todos los mercados, como una empresa altamente competitiva, confiable con el mejor crecimiento y ofreciendo sus productos y servicios con los mayores estándares de calidad.</p>
						</div>
					</div>
				</div>
				<div class="text-center pt-5 mt-3">
					<a href="http://localhost:4000/pagina/contacto.php" class="site-btn sb-big">Contactate con nosotros</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Sell Section end -->

	<!-- Agents Section -->
	
	<!-- Agents Section end -->

	<!-- Footer Section -->
	<?php pie()?>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
