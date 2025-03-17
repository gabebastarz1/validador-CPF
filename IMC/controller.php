<?php
  require_once 'model.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nome = $_POST['nome'];
      $altura = $_POST['altura'];
      $peso = $_POST['peso'];

      if ($altura == null || $peso == null || $nome == null) {
        echo "Preencha todos os campos";
      }

      $imc = calculaImc::calcula($altura, $peso);
      include 'view.php';
    }

  
?>