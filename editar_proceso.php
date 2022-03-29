<?php 
    include("conexion.php");
    
        $id=$_POST['id'];
        $nombres=$_POST['nombres'];
        $apellido_paterno=$_POST['apellido_paterno'];
        $apellido_materno=$_POST['apellido_materno'];
        $CURP=$_POST['CURP'];
        $numero_celular=$_POST['numero_celular'];

        $actualizar="UPDATE registro SET nombres='$nombres',apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', CURP='$CURP', numero_celular='$numero_celular' WHERE id='$id'";
        $resultado=mysqli_query($conexion, $actualizar);

        echo ' 
            <script>
                alert("Se han actualizado los cambios correctamente");
                location.href="index_consultar_datos.php";
            </script>
        ';


        if($resultado){
           
            echo "datos";
        }
        else{
            echo "los datos no pudieron ser mandados";
        }

?>