<?php

    include("conexion.php");

        $nombres=$_POST['nombres'];
        $apellido_paterno=$_POST['apellido_paterno'];
        $apellido_materno=$_POST['apellido_materno'];
        $CURP=$_POST['CURP'];
        $numero_celular=$_POST['numero_celular'];

        $query="INSERT INTO `registro`(`nombres`, `apellido_paterno`, `apellido_materno`, `CURP`, `numero_celular`) VALUES('$nombres','$apellido_paterno','$apellido_materno','$CURP','$numero_celular')";
        $resultado=$conexion->query($query);

        echo ' 
            <script>
                alert("Registro Exitoso");
                location.href="formulario_pagina_2.php";
            </script>
        ';


        if($resultado){
           
            echo "datos";
        }
        else{
            echo "los datos no pudieron ser mandados";
        }


?>