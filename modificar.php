<?php
include("conection_sis.php");

$id=$_GET["id"];
$nombre=$_GET["nombre"];
$apellidoP=$_GET["apellidoP"];
$apellidoM=$_GET["apellidoM"];


session_start();


    $sql = "EXEC dbo.sp_modificarEmpleado @idEmpleado = '$id', @nombre = '$nombre', @apellidoP ='$apellidoP', @apellidoM = '$apellidoM'";
    
    $stmt = sqlsrv_query($con, $sql);

    $row = sqlsrv_fetch_array($stmt);
        
						

	echo "<script type = 'text/javascript'> 
                        window.location = 'http://localhost:4000/pagina/listaEmpleados.php'; 
    				alert('Usuario modificado');	
    					
                 </script>";
?>
