<!DOCTYPE html>

<html lang="zxx">
<?php include "conection_sis.php"?>

<head>

	<title>Gray Matter</title>

	

	<meta name="description" content="Real estate HTML Template">

	<meta name="keywords" content="real estate, html">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	

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

	<?php include 'generales.php'?>

</head>

<body>

	<!-- Page Preloder -->

	<div id="preloder">

		<div class="loader"></div>

	</div>



	<!-- Header Section -->

	<?php menuSesion();?>

	<!-- Header Section end -->

    <?php $idEmpleado = $_GET['idEmpleado']?>

	<!-- Hero Section end -->


	<!-- Hero Section end -->



	<!-- Intro Section end -->

	<section class="intro-section spad">

		<div class="container">

			<div class="section-title">
				<p><p>

                <h2>Modificar empleado <?php echo $idEmpleado?></h2>
                

                        <?php 
							$sql = "EXEC dbo.sp_infoEmpleado @idEmpleado = '$idEmpleado'";
							$stmt = sqlsrv_query($con, $sql);

							$row = sqlsrv_fetch_array($stmt);
								$id=$row['idEmpleado'];
								$nombres=$row['nombre'];
								$apellidoP=$row['apellidoP'];
								$apellidoM=$row['apellidoM'];
						?>
              
				<form class="contact-form" action="modificar.php" method ="get">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" id="id" name="id" disabled value="<?php echo $id?>">
                        </div>
                        <div class="col-lg-12">
                            <input type="text"  id="nombre" name="nombre" value="<?php echo $nombres?>">
                        </div>
                        <div class="col-lg-12">
                            <input type="text"  id="apellidoP" name="apellidoP" value="<?php echo $apellidoP?>"> 
                        </div>
                        <div class="col-lg-12">
                            <input type="text" id="apellidoM" name="apellidoM" value="<?php echo $apellidoM?>"> 
                        </div>
                        <div class="col-lg-12">
                            <button class="site-btn sb-big">Modificar</button>
                        </div>
                    </div>
			    </form>
			<div>	
		</div>

    	

		</section>

	<!-- Intro Section end -->



	<!-- Property Section -->

		

	<!-- Property Section end -->

	

	<!-- Stories Section end -->

	
	<!-- Stories Section end -->



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