<?php
$conexao;

try {

    $conexao = new PDO('mysql:host=localhost;dbname=empresa', 'root', 'root');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
