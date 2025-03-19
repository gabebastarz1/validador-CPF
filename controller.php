<?php
  require_once 'model.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'] ?? '';
    $adicionar = isset($_POST['blacklist']);

    if (isset($_POST['blacklist'])) {
      if(!empty($cpf)){
        $resultado = validarCPF::blacklist($cpf,$adicionar);
      }else{
        echo "Digite um CPF válido";
      }
    }
    if(isset($_POST['enviar'])){
      if (!empty($cpf)) {
        $cpfValidado = ValidarCPF::validador($cpf);
        
    } else {
        echo "Digite um CPF válido.";
    }
    }

    include 'view.php';
  }
?>