<?php
    $operacion = $_POST['txt_operacion'];

    echo $operacion." = ".evaluarOperaciones($operacion);

    function evaluarOperaciones($operacion){
      $tipoDeOperacion;
      if (tipoOperacion($operacion,"+")) {
        $tipoDeOperacion = explode("+",$operacion);
        return (trim($tipoDeOperacion[0])+trim($tipoDeOperacion[1]));
      } elseif (tipoOperacion($operacion,"-")) {
        $tipoDeOperacion = explode("-",$operacion);
        return (trim($tipoDeOperacion[0])-trim($tipoDeOperacion[1]));
      } elseif (tipoOperacion($operacion,"*")) {
        $tipoDeOperacion = explode("*",$operacion);
        return (trim($tipoDeOperacion[0])*trim($tipoDeOperacion[1]));
      }elseif (tipoOperacion($operacion,"/")) {
        $tipoDeOperacion = explode("/",$operacion);
        return (trim($tipoDeOperacion[0])/trim($tipoDeOperacion[1]));
      }
    }

    function tipoOperacion($operacion,$oparando){
      for ($i = 0; $i < strlen($operacion); $i++) {
        if($operacion[$i] == $oparando ){
          return true;
        }
      }
      return false;
    }
 ?>
