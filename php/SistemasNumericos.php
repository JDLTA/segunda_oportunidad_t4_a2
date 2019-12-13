<?php
  $numDec = $_POST['txt_decimal'];
  echo "<br/>NUMERO DECIMAL :".$numDec;
  echo "<br/>NUMERO BINARIO:".decbin($numDec);
  echo "<br/>NUMERO OCTAL:".decoct($numDec);
  echo "<br/>NUMERO HEXADECIMAL: ".dechex($numDec);
 ?>
