<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=	, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Conversor de moedas</h1>
  <form action="" method="get">
    <label for="moedas">Quantos R$ você tem na carteira?</label>
    <input name="moedas" type="number">
    <input type="submit" value="Converter">
  </form>
  <?php 
    if(isset($_GET["moedas"])) {
      $reais = $_GET["moedas"];
      $dollar = $reais / 4.87;
      echo "Seus R$$reais valem $dollar dólares.";
    }
  ?> 
</body>
</html>