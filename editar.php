<?php 
    include("conexion.php");
    $id=$_GET["id"];
    $sql="SELECT *  FROM registro WHERE id='$id'";
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Editar datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style_editar.css">

    </head>
    <body>

      <form class="container" action="editar_proceso.php" method="post">
      <h1 class="text-center"><br><font style="font-family: Dominique" color="#17202A">Editar datos</font></h1><br>
        <form class="col-md-12">
          <table class="table table-dark table-hover" >
            <thead>
              <tr>
                <th><input type="hidden"ID></th>
                <th>Nombre(s)</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>CURP</th>
                <th>Numero de celular</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_assoc($query)){
              ?>
                <tr>
                  <td><input type="hidden" class="controls" value="<?php echo $row['id'];?>" name="id"></td>
                  <td><input type="text" class="controls" value="<?php echo $row['nombres'];?>" name="nombres"></td>
                  <td><input type="text" class="controls" value="<?php echo $row['apellido_paterno'];?>" name="apellido_paterno"></td>
                  <td><input type="text" class="controls" value="<?php echo $row['apellido_materno'];?>" name="apellido_materno"></td>  
                  <td><input type="text" class="controls" value="<?php echo $row['CURP'];?>" name="CURP" required maxlength="18" size="20"></td>  
                  <td><input type="text" class="controls" value="<?php echo $row['numero_celular'];?>" name="numero_celular" required maxlength="10"  size="16"></td> 
                  <td><input class="boton_guardar" type="submit" value="Guardar cambios"></td>                                          
                </tr>
              <?php 
                  }
              ?>
            </tbody>
          </table>
        </form>
      </form>  
    </body>
</html>
