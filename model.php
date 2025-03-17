<?php
  class validarCPF {
    public static function removePontuacao($cpf){
      $remover = array(".", ",", "!", "?", ";", ":", "-");
      return str_replace($remover, '', $cpf);
    } 
    public static function validador($cpf){
      //Recebe o CPF sem pontuação
      $cpf_F = self::removePontuacao($cpf);
      
      $cpf = substr($cpf_F, 0, -2);

      // mult seria os valores pelos quais o cpf é multiplicado, nesse caso seria de 2 a 10, dessa fora no loop, multiplicaria de 2 a 10 com os digitos do cpf da esquerda para a direita.
      $mult = 2;
      $total = 0;
      $digitoVerificador1 = 0;
      $digitoVerificador2 = 0;
      
      //echo $cpf;

      for ($i=strlen($cpf)-1; $i >= 0; $i--) { 
        $total += $cpf[$i] * $mult;
        $mult++;
      }
      
      //Cálculo do primeiro dígito
      $resto = $total % 11;
      if ($resto >= 2) {
        $digitoVerificador1 = 11 - $resto;
      }
      $cpf .= $digitoVerificador1;

      //Cálculo segundo dígito
      $total = 0;
      $mult = 2;
      for ($i = strlen($cpf) - 1; $i >= 0 ; $i--) { 
        $total += $cpf[$i] * $mult;
        $mult++;
      }
      $resto = $total % 11;
      if ($resto >= 2) {
        $digitoVerificador2 = 11 - $resto;
      }

      $digitoVerificador1 .= $digitoVerificador2;
      if ($digitoVerificador1 == substr($cpf_F, -2)){
        return "CPF Válido";
      }else {
        return "CPF inválido";
      }
    }

  }

?>