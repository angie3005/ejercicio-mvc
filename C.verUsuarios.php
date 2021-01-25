<?php

    require ("model/Conexion.php");

    $con = new Conexion(); 

        $usuarios = $con->getUser();

          require ("Views/V_verUsuarios.php");


    


?>