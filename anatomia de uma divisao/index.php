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
    <label for="dividendo">Dividendo:</label>
    <input type="number_format" name="dividendo">
    <label for="divisor">Divisor:</label>
    <input type="number_format" name="divisor">
    <input type="submit" value="ANALISAR">
  </form>

  <?php 
      $dividendo = $_GET["dividendo"];
      $divisor = $_GET["divisor"];
      $resto = $dividendo % $divisor;
      $quociente = floor($dividendo / $divisor);
      echo "<br>";
      echo "$dividendo / $divisor = $quociente, Resto: $resto";
  ?>
</body>

</html>
</body>
</html>