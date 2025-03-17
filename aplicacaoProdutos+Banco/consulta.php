<?php
require 'Produto.php';
require 'banco.php';

$listaProdutos = Produto::consultaProdutos($conexao)->fetchAll();

if (empty($listaProdutos)) {
  echo "Não há produtos ainda";
  echo '<br><br><a href="cadastro.php">Cadastrar produtos</a>';
  return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="consulta text-center py-4 px-3" id="">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"> Codigo</th>
            <th scope="col">Produto</th>
            <th scope="col">Data de validade</th>
            <th scope="col">Preço</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach (Produto::consultaProdutos($conexao) as $row) {
            echo "<tr>";
            echo "<td>" . $row['codigo'] . "</td>";
            echo "<td>" . $row['produto'] . "</td>";
            echo "<td>" . $row['data_validade'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>
      <a href="index.php" class="btn btnMenu">Voltar</a>
    </div>
  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>