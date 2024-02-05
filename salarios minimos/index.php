<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anatomia divisão</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>
<body>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="salario">Salário:</label>
    <input type="number_format" name="salario">
    <input type="submit" value="Calcular">
  </form>
  <br>

  <?php 
      $salario = $_GET["salario"] ?? 0;
      $salarioMinimo =  1412;
      $resto = $salario % $salarioMinimo;
      echo "Quem recebe um salário de R$". number_format($salario, 2, ",",".") . " ganha <strong>" . (int) ($salario / $salarioMinimo)." salários mínimos</strong> " . " e " . "R$ " . $resto ;
  ?>
</body>

</html>
</body>
</html>