<?php
  $palabra = $_POST['txt_palabra'];
  $letra = $_POST['txt_letra'];

  $resultado = numeroDeVocales($palabra);
  echo "<br/> CANTIDAD DE VOCALES: ".$resultado[0];
  echo "<br/>CANTIDAD DE CONSTANTES: ".$resultado[1];
  echo "<br/>CANTIDAD LETRA:".repeticionDeLetra($palabra,$letra);
  echo "<br/>CAMBIO DE PALABRA: ".cambiarPalabra($palabra);

function numeroDeVocales($palabra){
    $resultado = array(0,0);
      for ($i = 0; $i < strlen($palabra); $i++) {
        if(Vocales($palabra[$i])){
          $resultado[0]++;
        }else {
          $resultado[1]++;
        }
      }
      return $resultado;
  }

  function Vocales($letra){
    $array = array("A","E","I","O","U");
    for ($j = 0; $j < sizeof($array); $j++){
      if(strtoupper($letra) == $array[$j]){
        return true;
      }
    }
  }

  function repeticionDeLetra($palabra,$letra){
    $numAp = 0;
    for ($i = 0; $i < strlen($palabra); $i++) {
      if (strtoupper($letra) == strtoupper($palabra[$i])) {
        $numAp ++;
      }
    }
    return $numAp;
  }

  function cambiarPalabra($palabra) {
   $invertirPalabra = "";
    for ($i = 0; $i < strlen($palabra); $i++) {
      if ($i%2 == 0) {
        $invertirPalabra[$i]=strtoupper($palabra[$i]);
      }else {
          $invertirPalabra[$i]=strtolower($palabra[$i]);
      }
    }
    return $invertirPalabra;
}

 ?>
