<?php
class validarCPF
{
  public static function blacklist($cpfBase){
    $arquivo = 'blacklist.json';
    if(!file_exists($arquivo)){
      file_put_contents($arquivo, json_encode(["blacklist" => ["cpfs" => []]], JSON_PRETTY_PRINT));
    }
    $dados = json_decode(file_get_contents($arquivo), true);
    $cpfBase = self::removePontuacao($cpfBase);
    if (in_array($cpfBase, $dados["blacklist"]["cpfs"])) {
      return true;
    }

    $dados["blacklist"]["cpfs"][] = $cpfBase;
    file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    return false;

  }
  private static function removePontuacao($cpf)
  {
    $remover = array(".", ",", "!", "?", ";", ":", "-");
    return str_replace($remover, '', $cpf);
  }

  private static function calculaDigitos($cpf, $mult)
  {
    $total = 0;
    for ($i = strlen($cpf) - 1; $i >= 0; $i--) {
      $total += $cpf[$i] * $mult;
      $mult++;
    }
    return $total % 11;
  }

  private static function calculaDigitosVerificadores($cpfBase){ 

    $digito1 = self::calculaDigitos($cpfBase, 2);
    $digitoVerificador1 = ($digito1 >= 2) ? 11 - $digito1 : 0;

    $cpfBase .= $digitoVerificador1;
    $digito2 = self::calculaDigitos($cpfBase, 2);
    $digitoVerificador2 = ($digito2 >= 2) ? 11 - $digito2 : 0;

    return $digitoVerificador1 . $digitoVerificador2;
  }

  public static function validador($cpf){
    $cpf = self::removePontuacao($cpf);
    $cpfBase = substr($cpf, 0, -2);

    if (self::blacklist($cpfBase)) {
      return "CPF inválido (Blacklist)";
    }

    $digitosVerificadores = self::calculaDigitosVerificadores($cpfBase);

    if ($digitosVerificadores == substr($cpf, -2)) {
      return "CPF Válido";
    } else {
      return "CPF inválido";
    }
  }
  
}
