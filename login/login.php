<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Usuário: </label><br>
        <input type="text" name="user">
        <br>
        <label for="">Senha: </label><br>
        <input type="password" name="pass">
        <br>
        <input type="submit" value="Entrar" name="bt1">
        <input type="reset" value="Cancelar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['bt1'])){
        $usuarioDigitado=$_POST['user'];
        $senhaDigitada=$_POST['pass'];
        try{
            $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","aluno");
            $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
            $stm = $conecta->prepare($sql);
            $stm->bindParam(1, $usuarioDigitado);
            $stm->bindParam(2, $senhaDigitada);
            $stm->execute();
            $resultado = $stm->rowCount();
            if($resultado>0){
                echo "Login Aceito, seja bem vindo... {$usuarioDigitado}";
            }
            else
            {
                echo "Não passou";
            }
        }
        catch(PDOException $erro){
            echo "{$erro}";
        }
    }


?>