<?php 
    include("conexion.php");
    
        $id=$_GET['id'];
        $eliminar= "DELETE FROM registro WHERE id ='$id'";
        $resultado=mysqli_query($conexion, $eliminar);

        if ($resultado){
            header("Location: index_consultar_datos.php");
        }   else{
            echo "<script> alert('No se pudo eliminar el registro');</script>";
        }