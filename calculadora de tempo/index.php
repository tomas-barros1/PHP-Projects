<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de tempo</title>
</head>
<body>
  <form action="" method="get">
    <label for="segundos">Valor em segundos:</label>
    <input type="number_format" name="segundos">
    <input type="submit" value="CALCULAR">
  </form>
  
</body><br><br>
<?php 
  $segundos = $_GET['segundos'] ?? 0;
  $minutos = $segundos / 60;
  $horas = $minutos / 60;
  $dias = $horas / 24;
  $semanas = $dias / 7;
  echo "$segundos segundos em horas: $horas, em minutos: $minutos, em dias: $dias, em semanas $semanas.";
?>

</html>