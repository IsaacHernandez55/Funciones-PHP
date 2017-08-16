<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 3</title>

  </head>
  <body>
    <div class="container">
      <h2>Numeros Ascendentes</h2>
      <hr>
      <h2>Resultado</h2>

      </form>

    <?php
      $datos = array(1,2,3,4,5,6,7,8,9,10);
      sort($datos);
      foreach ($datos as $key => $value) {
        echo "datos[".$key."]=".$value;
        echo "<br>";
      }
     ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
