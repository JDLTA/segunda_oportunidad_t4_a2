<?php
    $num = $_POST['txt_num'];

    $numBi =  decbin($num);
    $a1 = decbin(~intval($num));
    $a2 = complementoA2($a1);
    echo "<br/>EL NUMERO BINARIO ES: <br>".$numBi;
    echo "<br/>EL NUMERO EN COMPLEMENTO A1 ES: <br>".$a1;
    echo "<br/>EL NUMERO EN COMPLEMENTO A2 ES: <br> ".$a2;


  function complementoA1($num){
    $a1 = "";
    for ($i=0; $i < strlen($num); $i++) {
      if($num[$i] == "0"){
        $a1[$i] = "1";
      }else {
        $a1[$i] = "0";
      }
    }
    return $a1;
  }

  function complementoA2($num){
    for ($i=strlen($num)-1 ; $i >= 0  ; $i--) {
      if($num[$i] == "0"){
        $num[$i] = "1";
        return $num;
      }else {
        $num[$i] = "0";
      }

    }
    return $num;
  }


 ?>
