<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller.php" method="post">
        aluno: <input type="text" name="aluno"><br>
        disciplina: <input type="text" name="disciplina"><br>
        nota 1: <input type="text" name="n1"><br>
        nota 2: <input type="text" name="n2"><br>
        nota 3: <input type="text" name="n3"><br>
        <input type="submit" value="Enviar" name="bt1">
    </form>
</body>
</html>

<?php
    if(isset($media)){
        echo "A média do aluno {$aluno} na disciplina {$disciplina} é {number_format($media, 2, ',', '')}";
    }
?>