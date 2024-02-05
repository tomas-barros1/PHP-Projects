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
    <label for="numero">Número:</label>
    <input type="number_format" name="numero">
    <input type="submit" value="Calcular">
  </form>
  <br>

  <?php 
      $numero = $_GET["numero"] ?? 0;
      echo "Raiz quadrada de $numero  " . sqrt($numero);
      echo "<br>Raiz cúbica de $numero  " . $numero ** 1/3;
  ?>
</body>

</html>
</body>
</html>