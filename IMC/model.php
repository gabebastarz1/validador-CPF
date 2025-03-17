<?php
  class calculaImc{
    public static function calcula($altura, $peso){
      return ($peso / ($altura * $altura)) ;
    }
  }
?>