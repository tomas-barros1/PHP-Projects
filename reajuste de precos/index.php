<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reajustador de preços</title>
</head>
<body>
  <form action="" method="get">
    <label for="preco">Preço: </label>
    <input type="number_format" name="preco">
    <label for="preco">Reajuste: %</label>
    <input type="number_format" name="reajuste">
    <input type="submit" value="CALCULAR">
  </form><br>

  <?php 
    $preco = $_GET['preco'] ?? 0;
    $reajuste = $_GET['reajuste'] ?? 0;

    echo "Custava R$$preco e agora custa R$" . ($preco * $reajuste) / 100 + $preco;  

  ?>

</body>
</html>