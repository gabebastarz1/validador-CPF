<html>
    <head><title>CADASTRO DE FUNCIONARIOS</title></head>
    <body>
        <form action="/ads5/session.php" method="post">
            nome: <input type="text" name="nome">
            <br><br>
            cpf: <input type="text" name="cpf">
            <br><br>
            <input type="submit" name="bt1" value="Enviar"></input>
            <input type="submit" name="bt2" value="Cancelar"></input>

        </form>      
    </body>
</html>

<?php

    if(isset($_POST["bt1"])){
    $nome=$_POST["nome"];
    $cpf=$_POST["cpf"];

    echo "Nome: {$nome}<br>";
    echo "CPF: {$cpf}<br>";

    };
?>