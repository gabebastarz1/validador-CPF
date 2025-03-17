<?php
    session_start();
    $nome=$_POST["nome"];
    $cpf=$_POST["cpf"];

    $_SESSION['user'] = $nome;
    echo '<h1> A Sessão está criada <h1>';


?>