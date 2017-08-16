<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 2</title>

  </head>
  <body>
    <div class="container">
      <h2>Nombres contenidos en el array</h2>

    <?php

    $datos = array('Mirna','Paula','Maira','Jose','Sebastian','Carlos' );
    $resultado = count($datos);
    echo "El numero de elementos es: $resultado <br>";
    shuffle($datos);
    foreach ($datos as $dato) {
      echo "$dato &nbsp";
    }

     ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
