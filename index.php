<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario</title>
</head>
<body>

	<header><br><br><br>
        <center><h1><font style="font-family: Dominique" color="#17202A">Registro de datos</font></h1></center>
    </header>

  <section class="form-register">
	<form name="form" action="guardar.php" method="POST">

		<label for="nombres"><font style="font-family: Berlin Sans FB">Nombre(s):</label></font>
		<input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre." />

		<label for="apellido_paterno"><font style="font-family: Berlin Sans FB">Apellido paterno:</label></font>
		<input class="controls" type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Ingrese su apellido paterno." />

		<label for="apellido_materno"><font style="font-family: Berlin Sans FB">Apellido materno:</label></font>
		<input class="controls" type="text" name="apellido_materno" id="apellido_materno" placeholder="Ingrese su apellido materno." />

		<label for="CURP" ><font style="font-family: Berlin Sans FB">CURP:</label></font>
		<input class="controls" type="text" name="CURP" id="CURP" required maxlength="18" size="10" placeholder="Ingrese su CURP." />

		<label for="numero_celular"><font style="font-family: Berlin Sans FB">Número de celular:</label></font>
		<input class="controls" type="text" name="numero_celular"   id="numero_celular"  required maxlength="10"  size="10" placeholder="Ingrese su número de celular." />

    <div class="boton_form">
        <input class="boton_enviar" type="submit" value="Enviar formulario"><a href="formulario_pagina_2.php"></a>
        <input class="boton_borrar" type="reset" value="Borrar formulario">
    </div>
	<a href="index_consultar_datos.php"><input type="button" class="boton_consultar" value="Consultar datos"></a>
  </section>

</body>
</html>