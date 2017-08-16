<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 4</title>

  </head>
  <body>
    <div class="container">
      <h2>Numeros Pares</h2>

    <?php
      $datos = array(2,4,6,8,10);
      sort($datos);
      foreach ($datos as $key => $value) {
        echo "datos[".$key."]= ".$value;
        echo "<br>";
      }
    ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
