<?php
session_start();
    $valores = $_SESSION['arr'];
    $soma = 0;
    
    for ($i=0; $i < sizeof($valores); $i++) { 
        $soma += (int)$valores[$i]["valor"];
    }

    print_r($soma)
?>