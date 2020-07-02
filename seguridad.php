<?php
include("conection_sis.php");

$nombre = $_POST['nombre'];
$clave  = $_POST['clave'];



session_start();


    $sql = "SELECT * FROM usuarios WHERE usuario = '$nombre' AND clave = '$clave'";
    $stmt = sqlsrv_query($con, $sql);

    $row = sqlsrv_fetch_array($stmt);
        
						

if($row['idUsuario']>0){
	$_SESSION['idUsuarioActivo']= $row['idUsuario'];
    $_SESSION['nombreCompleto'] = $row['nombre'].' '.$row['apellidoP'];
    $_SESSION['Nombre']=  $row['nombre'];
    $_SESSION['UsuarioActivo']= 'Si';
	echo "<script type = 'text/javascript'> 
                        window.location = 'http://localhost:4000/pagina/panelPrincipal.php'; 
                 </script>";
            
}
else{
	echo "<script type = 'text/javascript'> 
                        window.location = 'http://localhost:4000/pagina/login.php'; 
    				alert('Usuario o clave incorrecta, prueba de nuevo');	
    					
                 </script>";
}
?>
