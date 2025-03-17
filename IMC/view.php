<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcula IMC</title>
</head>
<body>
  <form action="controller.php" method="post">
      <label for="nome">Nome:</label><br>
      <input type="text" name="nome">
      <br>
      <label for="peso">Peso (em KG):</label><br>
      <input type="text" name="peso">
      <br>
      <label for="altura">Altura (em cm):</label><br>
      <input type="text" name="altura">
      <br><br>
      <input type="submit" name="bt1" value="Enviar">
      <input type="reset" name="" value="Cancelar">
  </form>
</body>
</html>

<?php
  if(isset($imc)){
    echo number_format($imc * 10000, 2);
  }
?>