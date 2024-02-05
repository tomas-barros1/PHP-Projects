<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular idade</title>
</head>
<body>
  <form action="" method="get">
    <label for="nascimento">Nascimento:</label>
    <input type="number" name="nascimento">
    <label for="ano">Quer saber sua idade em que ano?</label>
    <input type="number" name="ano">
    <input type="submit" value="CALCULAR">
  </form>

  <?php 
    if(isset($_GET['nascimento'],$_GET['ano'])) {
      $nascimento = $_GET["nascimento"];
      $ano = $_GET["ano"];
      $idade =  (int) $ano - (int)$nascimento;
      echo "Idade: $idade";
    } else {
      echo "Preencha os campos!";
    }

  ?>

</body>
</html>