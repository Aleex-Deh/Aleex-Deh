
<html>
<head>
<style>
  table {
    width: 100%;
    height: 100vh;
  }

  td {
    width: 33.33%;
    height: 33.33%;
    text-align: center;
    vertical-align: middle;
  }
</style>
</head>


  

<body>

<table>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td> <?php 
  error_reporting(0);
  $op1 = $_GET['op1'];
  $op2 = $_GET ['op2'];
  $operacion = $_GET['operacion'];

  if (!is_numeric($op1) || !is_numeric($op2)) {
      echo "Pon caracter numerico en op 1 y op2, pero en operacion solo suma, resta, multiplicacion y division. Porfavor";
  } else {
  }

  if ($operacion == "suma") {
      $resultado = $op1 + $op2;
  } elseif ($operacion == "resta") {
      $resultado = $op1 - $op2;
  } elseif ($operacion == "multiplicacion") {
      $resultado = $op1 * $op2;
  } elseif ($operacion == "division") {
      $resultado = $op1 / $op2;
  } else  {
      echo "Introduce solo suma, resta, multiplicacion o division";
  }






  echo "$opeacion";
  echo "$resultado"



  ?> </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

</body>
</html>

