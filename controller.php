<?php
  require_once 'model.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];

    $cpfValidado = validarCPF::validador($cpf);
    
    
    include 'view.php';
  }
?>