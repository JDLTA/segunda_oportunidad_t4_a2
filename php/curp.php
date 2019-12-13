
<?php
  $nombre = $_POST['txt_nombre'];
  $apellidoPaterno = $_POST['txtApellidoPaterno'];
  $apellidoMaterno = $_POST['txtApellidoMaterno'];
  $sexo = $_POST['radioButton_Sexo'];
  $fechaDeNacimiento = $_POST['fecha_nacimiento'];
  $estado = $_POST['SelecionarEstado'];

    $CURP = AdquirirPrimeraLetra(formatearCadena($apellidoPaterno)).
            obtenerVocal(formatearCadena($apellidoPaterno),1).
            AdquirirPrimeraLetra(formatearCadena($apellidoMaterno)).
            AdquirirPrimeraLetra($nombre).
            obtnerFecha($fechaDeNacimiento).
            $sexo.
            obtenerEstado($estado).
            obtenerConsonate(formatearCadena($apellidoPaterno)).
            obtenerConsonate(formatearCadena($apellidoMaterno)).
            obtenerConsonate($nombre).
            obtenerNumero($fechaDeNacimiento);

echo "<h1>CURP: ".strtoupper($CURP)."</h1>";

  function obtenerNumero($fecha){
	   return '0'.substr($fecha,2,1);
   }

  function AdquirirPrimeraLetra($cadena){
    trim($cadena);
    return   trim($cadena)[0];
  }

  function formatearCadena($cadena){
    $res = explode(" ",$cadena);
    return ($res[sizeof($res)-1]);
  }

  function obtenerVocal($cadena,$num) {
    $cont = 0;
    for ($i = 0; $i < strlen($cadena); $i++){
      if (esVocal($cadena[$i])) {
        return $cadena[$i];
      }
    }
  }

  function esVocal($caracter){
    $array = array("A","E","I","O","U");
  	for ($j = 0; $j < sizeof($array); $j++){
  		if(strtoupper($caracter) == $array[$j]){
  			return true;
  		}
  	}
  }

  function obtnerFecha($fecha) {
  	return substr($fecha,2, 2).
  	     substr($fecha,5, 2).
  		   substr($fecha,8, 2);
  }

  function obtenerSexo ($sexo) {
  	if ($sexo == 'on') {
  		return 'H';
  	} else {
  		return 'M';
  	}
  }
  function obtenerEstado($numEstado){
    $ENTIDAD_FEDERATIVA_VALOR = ["AS",
                              "BC",
    		                      "BS",
                              "CC",
                              "CL",
                              "CM",
                              "CS",
                              "CH",
                              "DF",
                              "DG",
                              "GT",
                              "GR",
                              "HG",
                              "JC",
                              "MC",
                              "MN",
                              "MS",
                              "NT",
                              "NL",
                              "OC",
                              "PL",
                              "QT",
                              "QR",
                              "SP",
                              "SL",
                              "SR",
                              "TC",
                              "TS",
                              "TL",
                              "VZ",
                              "YN",
                              "ZS",
                              "SM",
                              "NE"];
         return $ENTIDAD_FEDERATIVA_VALOR[$numEstado];
  }

  function obtenerConsonate($cadena){
  	for ($i = 1; $i < strlen($cadena); $i++) {
  		if(!esVocal($cadena[$i])){
  			return $cadena[$i];
  		}
  	}
  }

 ?>
