<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisar número real</title>
</head>

<style>
  body {
    margin-top: 20rem;
    text-align: center;
    font-size: 15pt;
    background-color: white;
    color: white;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(10,10,120,1) 35%, rgba(0,212,255,1) 100%);
  }

  input {
    padding: 5px;
    border: 2px black solid;
  }

  input[type="submit"] {
    border-radius: 20px;
  }

  p {
    line-height: 30px;
  }

</style>

<body>
  <form action="">
    <label for="numero">Número real:</label>
    <input type="number_format" name="numero">
    <input type="submit" value="ANALISAR">
  </form>

  <strong>
    <p>
      <?php 
        if(isset($_GET["numero"])) {
          $numero = $_GET["numero"];
          $numeroArrendondado = floor($numero);
          $numeroParteDecimal = fmod($numero, 1);
          echo "Número: $numero <br>Parte inteira: $numeroArrendondado <br>Parte decimal: $numeroParteDecimal";
        }
      ?>
    </p>
  </strong>
</body>
</html>
