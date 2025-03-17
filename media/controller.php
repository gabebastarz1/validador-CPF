<?php
    require_once 'model.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $aluno = $_POST['aluno'];
            $disciplina = $_POST['disciplina'];
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            
            if ($aluno == NULL || $disciplina == NULL || $n1 == NULL || $n2 == NULL || $n3 == NULL) {
                echo "Preencha todos os campos";
                return;
            }
            
            
            $media = calculaMedia::calcula($n1, $n2, $n3);
            include 'view.php';
        }

?>



