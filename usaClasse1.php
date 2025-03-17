<?php
   require("classe1.php");
   $x = new Dados("Gabriel", 500);

   echo "Nome: {$x->nome}<br>";
   echo "Salario: {$x->salario}<br>";
   
   $novosal=$x->SomaSalario(2000);
   echo "Novo Salário: {$novosal}<br>";

   
?>