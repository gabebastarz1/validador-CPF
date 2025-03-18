<?php
  require_once 'model.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];

    if (isset($_POST['blacklist'])) {
      if(!empty($cpf)){
        $resultado = validarCPF::blacklist($cpf);
      }else{
        echo "Digite um CPF válido";
      }
    }else{
      $cpfValidado = validarCPF::validador($cpf);
    }

    include 'view.php';
  }
?>