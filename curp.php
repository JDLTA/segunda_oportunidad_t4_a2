<!DOCTYPE html>
<html>
<head>
	<title>GENERAR CURP</title>
	<meta charset="utf-8">

</head>
<body>
		<h1>GENERAR CURP</h1>
		<form action="php/curp.php" method="POST">
			<label>CUAL ES SU NOMBRE</label>
			<br>
			<input type="text" name="txt_nombre" id="txt_nombre"required>
			<br>
			<label>CUAL ES SU APELLIDO PATERNO</label>
			<br>
			<input type="text" name="txtApellidoPaterno" id="txtApellidoPaterno" required>
			<br>
			<label>CUAL ES SU APELLIDO MATERNO</label>
			<br>
			<input type="text" name="txtApellidoMaterno" id="txtApellidoMaterno" required>
			<br>
			<label>Hombre</label>
			<input type="radio" name="radioButton_Sexo" id="rb_h" value="H">
		 	 <br>
		 	 <label>Mujer</label>
		 	 <input type="radio" name="radioButton_Sexo" id="rb_m" required value="M">
		 	 
		 	 <br>
			<label>CUAL ES SU FECHA DE NACIMIENTO:</label>
			<br>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" step="1" min="1900-01-01" max="2100-12-31" id="fecha_nacimiento" value="2018-10-09">
			<br>
			<label>CUAL ES SU ESTADO DE ORIGEN:</label>
			<br>
			<select name="SelecionarEstado" id="SelecionarEstado">
			   <option value="0">AGUASCALIENTES </option>
                <option value="1">BAJA CALIFORNIA NTE. </option>
                <option  value="2">BAJA CALIFORNIA SUR </option>
                <option  value="3">CAMPECHE </option>
                <option  value="4">COAHUILA </option>
                <option value="5">COLIMA </option>
                <option value="6">CHIAPAS </option>
                <option value="7">CHIHUAHUA </option>
                <option value="8">DISTRITO FEDERAL </option>
                <option value="9">DURANGO </option>
                <option value="10">GUANAJUATO </option>
                <option value="11">GUERRERO </option>
                <option value="12">HIDALGO </option>
                <option value="13">JALISCO </option>
                <option value="14">MEXICO </option>
                <option value="15">MICHOACAN </option>
                <option value="16">MORELOS </option>
                <option value="17">NAYARIT </option>
                <option  value="18">NUEVO LEON </option>
                <option  value="19">OAXACA </option>
                <option  value="20">PUEBLA </option>
                <option  value="21">QUERETARO </option>
                <option  value="22">QUINTANA ROO </option>
                <option  value="23">SAN LUIS POTOSI </option>
                <option  value="24">SINALOA </option>
                <option  value="25">SONORA </option>
                <option  value="26">TABASCO </option>
                <option  value="27">TAMAULIPAS </option>
                <option  value="28">TLAXCALA </option>
                <option  value="29">VERACRUZ </option>
                <option  value="30">YUCATAN </option>
                <option  value="31">ZACATECAS </option>
                <br>
			</select>
			<br>
			<button type="submit" id="btn_generar" name="btn_generar"  >GENERAR CURP</button>
		</form>
</body>
</html>
