<?php
    session_start();
    if(isset($_SESSION['user'])){
        echo "Sessão está ativa <br>";
        echo "Usuário = {$_SESSION['user']}";
    }
    else{
        echo "Você não está logado <br>";
    };

?>