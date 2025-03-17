<html>
    <head><title>CARRINHO DE COMPRAS</title></head>
    <body>
        <h1>CARRINHO DE COMPRAS<h1>
        <form action="" method="post">
            NOME DO PRODUTO: <input type="text" name="name">
            <br><br>
            PREÇO: <input type="number" name="valor">
            <br><br>
          
            <input type="submit" name="bt1" value="Enviar Produto"></input>
            <input type="reset" name="bt2" value="Cancelar"></input>
            <a value="Carrinho" href="total.php">Carrinho</a>

        </form>      
    </body>
</html>

<?php
session_start();


    if(isset($_POST["bt1"])){
        $valor=$_POST["valor"];
        $name=$_POST["name"];
        $produto = ["name" => $name, "valor" => $valor] ;
        $arr = [];
        if(!isset($_SESSION['arr'])){
            $arr = [$produto] ;
        }else{
            $arr = $_SESSION['arr'];
            array_push($arr, $produto);
        };
            $_SESSION['arr'] = $arr;
        
        print_r($arr);
     
    };
?>