<html>
    <head><title>FINANCIAMENTO</title></head>
    <body>
        <h1>FINANCIAMENTO<h1>
        <form action="" method="post">
            Valor do financiamento: <input type="text" name="valor">
            <br><br>
            Número de parcelas: <input type="text" name="parcelas">
            <br><br>
            Taxa de juros: <input type="text" name="juros">
            <br><br>
            <input type="submit" name="bt1" value="Enviar"></input>
            <input type="submit" name="bt2" value="Cancelar"></input>

        </form>      
    </body>
</html>

<?php

    if(isset($_POST["bt1"])){
    $valor=$_POST["valor"];
    $parcelas=$_POST["parcelas"];
    $juros=$_POST["juros"];

    $juros = $juros / 100;

    $montante = $valor * pow((1 + $juros), $parcelas);

    for ($i=0; $i < $parcelas; $i++) { 
        $valor = $valor + ($valor * $juros);
    }
    
    echo $valor;
   // echo round($montante, 2);


     
    };
?>