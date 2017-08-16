<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 1</title>

  </head>
  <body>
    <div class="container">
      <h2>Ingresar Datos Personales</h2>
      <form action="Ejercicio1.php" method="post">
        <label>Digite su Nombre Completo: &nbsp</label>
        <input type="text" name="nombre" value="">
        <br>
        <label>Digite su Direccion: &nbsp</label>
        <input type="text" name="direccion" value="">
        <br>
        <label>Digite su Telefono: &nbsp</label>
        <input type="tel" name="telefono" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Ingresar">
        <br>
        <hr>
        <h2>Datos Personales</h2>

      </form>

    <?php
    if ($_POST) {
      $datos = array($_POST['nombre'],$_POST['direccion'],$_POST['telefono'] );
      list($nom,$direc,$tel)=$datos;


      echo "Su Nombre es: $nom";
      echo "<br>";
      echo "Su Direccion es: $direc";
      echo "<br>";
      echo "Su Telefono es: $tel";
    }
     ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
