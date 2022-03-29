<?php 
    include("conexion.php");
    $sql="SELECT *  FROM registro";
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Datos registrados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style_consulta_datos.css">

    </head>
    <body>

      <div class="container">
      <h1 class="text-center"><br><font style="font-family: Dominique" color="#17202A">Datos registrados</font></h1>
      <a href="index.php"><input type="button" class="boton_insertar" value="Nuevo registro"></a><br> 
        <div class="col-md-12">
          <table class="table table-dark table-hover" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre(s)</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>CURP</th>
                <th>Numero de celular</th>
                <th>Acciones</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_assoc($query)){
              ?>
                <tr>
                  <td><?php  echo $row['id']?></td>
                  <td><?php  echo $row['nombres']?></td>
                  <td><?php  echo $row['apellido_paterno']?></td>
                  <td><?php  echo $row['apellido_materno']?></td>  
                  <td><?php  echo $row['CURP']?></td>  
                  <td><?php  echo $row['numero_celular']?></td> 
                  <td><a href="editar.php?id=<?php echo $row['id'];?>"><input type="button" class="boton_editar" value="Editar"></a></td><td><a href="eliminar_proceso.php?id=<?php echo $row['id'];?>"><input type="button" class="boton_eliminar" value="Eliminar"></a></td>                                           
                </tr>
              <?php 
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>  
      <script src="confirmar_eliminar.js"></script>
    </body>
</html>
