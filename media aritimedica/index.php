<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Média aritmética </title>
</head>
<body>
  <form action="" method="get">
    <label for="valor1">Valor 1:</label>
    <input type="number_format" name="valor1">
    <label for="peso1">Peso 1:</label>
    <input type="number_format" name="peso1">
    <label for="valor2">Valor 2:</label>
    <input type="number_format" name="valor2">
    <label for="peso2">Peso 2:</label>
    <input type="number_format" name="peso2">
    <input type="submit" value="CALCULAR">
    </form>
</body>
  <?php 
  if (isset($_GET['valor1'],$_GET['valor2'],$_GET['peso1'],$_GET['peso2'])) {
    $n1 = $_GET['valor1'];
    $p1 = $_GET['peso1'];
    $n2 = $_GET['valor2'];
    $p2 = $_GET['peso1'];

    echo "<br>Média aritmética  ponderada: " . ($n1 * $p1) + ($n2 * $p2) / ($p1 + $p2) . " media aritmética " . ($n1 + $n2) / 2;
  } else {
    echo "<br>Preencha os campos!";
  }
  ?>

</html>