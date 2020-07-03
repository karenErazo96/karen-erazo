<?php
	//$provincia = (isset($_POST["lstprovincia"]) ? $_POST["lstprovincia"] : "0");
var_dump($_POST);
//COMENTARIO DE PRUEBA//

//$provincia = $_POST["lstprovincia"];
$provincia = (isset($_POST["provincia"]) ? $_POST["provincia"] : "0");
	$ciudad="";
	if ($provincia == "1")
	{
		$ciudad="
			<option value=1>Guayaquil</option>
			<option value=2>Salinas</option>
			<option value=3>Esmeraldas</option>
                        <option value=4>Machala</option>
			<option value=5>Babahoyo</option>
			<option value=6>Loja</option>
			<option value=7>Ibarra</option>
			<option value=8>Guayaquil</option>
			<option value=9>Salinas</option>
			<option value=10>Quito</option>
			
		";
	}
//vamos a ver  las provincias//

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action='Prueba1.4.php' method='POST' name='frmpersona' id='frmpersona'>
		<input type="text" name="txtcedula" placeholder="Cédula"><br>
		<input type="text" name="txtnombre" placeholder="Nombre"><br>
		<input type="text" name="txtdirección" placeholder="Dirección"><br>
		<input type="text" name="txttelefono" placeholder="Teléfono"><br>
		<input type="text" name="txtcorreo" placeholder="Correo"><br>
	    
		<select name="lstprovincia" onchange="document.getElementById('frmpersona').submit();"value=$provincia">
			<option value="1" <?php if($provincia=='1') { echo "selected='selected'";} ?> >Guayas</option>
			<option value="2" <?php if($provincia=='2') {echo "selected='selected'";} ?>>Manabi</option>
                        <option value="3" <?php if($provincia=='3') {echo "selected='selected'";} ?>>Zamora </option>

			<option value="4" <?php if($provincia=='4') {echo "selected='selected'";} ?>>Esmeraldas</option>
			<option value="5" <?php if($provincia=='5') { echo "selected='selected'";} ?> >Pichincha</option>
			<option value="6" <?php if($provincia=='6') {echo "selected='selected'";} ?>>Cañar</option>
	                <option value="7" <?php if($provincia=='7') {echo "selected='selected'";} ?>>El Oro</option>
			<option value="8" <?php if($provincia=='8') { echo "selected='selected'";} ?> >Carchi</option>
			<option value="9" <?php if($provincia=='9') {echo "selected='selected'";} ?>>Los Rios</option>
			
	//&%las ciudades y mas//	
		<select name="ciudad"><?php echo $ciudad ?></select><br><br>
		<input type="submit" name="cmdenviar" id="cmdenviar" value="Enviar">
	</form>
	
</body>
</html>
