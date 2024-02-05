<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>
<body>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <label for="idade">Idade:</label>
    <input type="number" name="idade">
    <input type="submit" value="ENVIAR">
  </form>

  <?php 
      if(isset($_GET['nome'])){
        if(isset($_GET['nome'])) {
          $nome = $_GET['nome'];
          $idade = $_GET['idade'];
          echo "Nome: $nome <br> Idade: $idade";
        } 
      }
  ?>
</body>

</html>