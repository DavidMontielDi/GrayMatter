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



	<!-- Hero Section end -->


	<!-- Hero Section end -->



	<!-- Intro Section end -->

	<section class="intro-section spad">

		<div class="container">

			<div class="section-title">
				<p><p>

				<h2>Bitacora de asistencia</h2>



				


				<div class="section-title" >
					<table class="table">
					<thead class="thead-dark">
						<tr>
						<th scope="col">Identificador</th>
						<th scope="col">Entrada</th>
						<th scope="col">Salida</th>
						<th scope="col">Empleado</th>
						<th scope="col">Area</th>
						<th scope="col">Horas trabajadas</th>
						<th scope="col">Consumo aproximado</th>
						</tr>
					</thead>
					<tbody>
						<tr>

						<?php 
							$sql = "EXEC dbo.sp_mostrarAsistencia";
							$stmt = sqlsrv_query($con, $sql);

							while($row = sqlsrv_fetch_array($stmt)){
								$id=$row['Identificador'];
								$entrada=$row['Entrada'];
								$salida=$row['Salida'];
								$empleado=$row['Empleado'];
								$area=$row['Area'];
								$horas = $row['Horas Trabajadas'];
								$consumo = $row['Aproximado de consumo'];
							


						?>		

						<th scope="row"><?php echo $id?> </th>
						<td><?php echo $entrada?> </td>
						<td><?php echo $salida?> </td>
						<td><?php echo $empleado?> </td>
						<td><?php echo $area?> </td>
						<td><?php echo $horas?> </td>
						<td><?php echo $consumo?> </td>
						</tr>
						<?php } ?>
					</tbody>
					</table>
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