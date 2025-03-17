<?php
  class Dados {
    //atributos da classe
    public $nome;
    public $salario;

    //contrutor da classe
    public function __construct($no,$sal){
      $this->nome=$no;
      $this->salario=$sal;

    }

    public function SomaSalario($v){
      $this->salario=$this->salario+$v;
      return($this->salario);
    }
    
    
  }
?>