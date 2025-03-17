<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
  <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="py-4 px-3" id="menuBox">
      <form method="post" action="">
        <div class="text-center">
          <h2>Cadastro</h2>
        </div>
        <label for="">Código: </label><br>
        <input type="text" name="codigo" required cls>
        <br><br>
        <label for="">Produto: </label><br>
        <input type="text" name="produto" required>
        <br><br>
        <label for="">Data de Validade:</label><br>
        <input type="date" name="dataValidade" required>
        <br><br>
        <label for="">Preço:</label><br>
        <input type="number" name="preco">
        <br><br>
        <div class="text-center">
          
          <button type="submit" name="enviar" class="btn btnMenu">Enviar</button>
          <a href="index.php" class="btn btnMenu">Voltar</a>
        </div>
      </form>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
<?php

require 'banco.php';
require 'Produto.php';


if (!isset($_POST["enviar"])) {
  return;
}


$codigo = $_POST["codigo"];
$produto = $_POST["produto"];
$dataValidade = $_POST["dataValidade"];
$preco = $_POST["preco"];

if ($codigo == "" || $produto == "" || $dataValidade == "") {
  return;
}

$id = $_POST['codigo'] ?? null;
if (!$id) {
  die("");
}

$stmt = $conexao->prepare("SELECT COUNT(*) FROM produtos WHERE codigo = ?");
$stmt->execute([$id]);
$existe = $stmt->fetchColumn();

if ($existe > 0) {
  die("<script type='text/javascript'>alert('Erro, código já cadastrado!');</script>");
} else {
  $item = new Produto($codigo, $conexao, $produto, $dataValidade, $preco);
  $item->salvar();
  echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso!');</script>";
  
}


?>