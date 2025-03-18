<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validador CPF</title>
</head>
<body>
  <form action="controller.php" method="post">
    <label for="cpf">CPF:</label>
    <input type="text" maxlenght="14" id="cpf" name="cpf" placeholder="000.000.000-00" onkeyup="this.value=FormatarCPF(this.value)">
    <br><br>
    <input type="submit" value="Enviar">
    <input type="submit" name="blacklist" value="Adicionar na blacklist">
    
    <br><br>
  </form>
</body>
<script>
  function FormatarCPF(cpf){
    cpf = cpf.replace(/\D/g, "")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
    return cpf
  }
</script>
</html>

<?php
  if (isset($cpfValidado)) {
    echo $cpfValidado;
  }else if(isset($resultado)){
    echo $resultado ? "CPF já estava adicionado na blacklist" : "CPF foi adicionado na Blacklist";
  }
?>