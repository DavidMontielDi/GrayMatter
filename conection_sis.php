<?php
    $serverName = "sql5046.site4now.net";
    $connectionInfo = array( "Database"=>"DB_A61535_check", "UID"=>"DB_A61535_check_admin", "PWD"=>"Supremo1721","CharacterSet"=>"UTF-8");
    $con = sqlsrv_connect($serverName,$connectionInfo);

    if($con){
        echo "Conexion exitosa";
    }else{
        echo "Conexion fallida";
    }
?>