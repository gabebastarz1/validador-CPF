<html>
    <head><title>total$total</title></head>
    <body>
        <h1>validador de código de barras<h1>
        <form action="" method="post">
            Digite o código de barras: <input type="number" name="code">
            <br><br>
            <input type="submit" name="bt1" value="Enviar"></input>
            <input type="submit" name="bt2" value="Cancelar"></input>

        </form>      
    </body>
</html>

<?php

    if(isset($_POST["bt1"])){
    $total = 0;
    $code = substr($_POST["code"], 0, -2);
    $digitoVer = substr($_POST["code"], 11);
    $weightflag = true;
    for ($i=0; $i < strlen($code); $i++) { 

        $total += (int)$code[$i] * ($weightflag ? 1:3);
        $weightflag = !$weightflag;

    }

    $codeVer = ((round(($total / 10), 0) + 1) * 10) - $total;


   
    echo "código verificador: {$codeVer} <br>";
    


   

     
    };
?>