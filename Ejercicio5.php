<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 5</title>

  </head>
  <body>
    <div class="container">
      <h2>Operaciones Matematicas</h2>
      <form  action="Ejercicio5.php" method="post">
        <label>Ingrese Numero 1: &nbsp</label>
        <input type="number" name="num1" value="">
        <br>
        <label>Ingrese Numero 2: &nbsp</label>
        <input type="number" name="num2" value="">
        <br>
        <label>Ingrese Numero 3: &nbsp</label>
        <input type="number" name="num3" value="">
        <br>
        <label>Ingrese Numero 4: &nbsp</label>
        <input type="number" name="num4" value="">
        <br>
        <label>Ingrese Numero 5: &nbsp</label>
        <input type="number" name="num5" value="">
        <br>
        <label>Ingrese Numero 6: &nbsp</label>
        <input type="number" name="num6" value="">
        <br>
        <label>Ingrese Numero 7: &nbsp</label>
        <input type="number" name="num7" value="">
        <br>
        <label>Ingrese Numero 8: &nbsp</label>
        <input type="number" name="num8" value="">
        <br>
        <label>Ingrese Numero 9: &nbsp</label>
        <input type="number" name="num9" value="">
        <br>
        <label>Ingrese Numero 10:</label>
        <input type="number" name="num10" value="">
        <br>
        <br>
        <input type="submit" class="btn btn-target" name="Enviar" value="Ingresar">
        <hr>
        <h2>Resultado</h2>
      </form>


    <?php
    if ($_POST) {
      error_reporting(0);
      $datos = array($_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5'],$_POST['num6'],$_POST['num7'],$_POST['num8'],$_POST['num9'],$_POST['num10']);
      $suma = $datos[0]+$datos[1]+$datos[2]+$datos[3]+$datos[4]+$datos[5]+$datos[6]+$datos[7]+$datos[8]+$datos[9];
      $resta = $datos[0]-$datos[1]-$datos[2]-$datos[3]-$datos[4]-$datos[5]-$datos[6]-$datos[7]-$datos[8]-$datos[9];
      $multiplicacion = $datos[0]*$datos[1]*$datos[2]*$datos[3]*$datos[4]*$datos[5]*$datos[6]*$datos[7]*$datos[8]*$datos[9];
      $division = $datos[0]/$datos[1]/$datos[2]/$datos[3]/$datos[4]/$datos[5]/$datos[6]/$datos[7]/$datos[8]/$datos[9];

      echo "La suma es: $suma";
      echo "<br>";
      echo "La resta es: $resta";
      echo "<br>";
      echo "La multiplicacion es: $multiplicacion";
      echo "<br>";
      echo "La division es: $division";


    }
     ?>

   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
