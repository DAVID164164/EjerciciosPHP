<html>
<body>

<form method ="post" action="E3.php"><br>
<h3>Ingrese los datos:<br></h3>
<label for= "" class= "firts-name"><b>Nombre:</b></label>
<input id="nombre" type="text" name="nombre" class ="inputArea" value="nombre"><br>
<label for= "" class= "firts-name"><b>Apellido:</b></label>
<input id="nombre" type="text" name="Apellido" class ="inputArea" value="Apellido"><br>
<label for= "" class= "firts-name"><b>Direccion:</b></label>
<input id="nombre" type="text" name="Direccion" class ="inputArea" value="Direccion"><br>
<label for= "" class= "firts-name"><b>Telefono:</b></label>
<input id="nombre" type="text" name="Telefono" class ="inputArea" value="Telefono"><br>
<label for= "" class= "firts-name"><b>DUI:</b></label>
<input id="nombre" type="text" name="DUI" class ="inputArea" value="DUI"><br>
<input id="mostrar" type="submit" name="mostrar" value="mostrar"><br>
<input id="borrar" type="submit" name="borrar" value="borrar"><br>


</form>

</body>
</html>

<?php

session_start();
if(isset($_POST["mostrar"])){
	$_SESSION["datos"][]=$_POST["nombre"];
}
elseif(isset($_POST["mostrar"]))
{
	unset($_SESSION["datos"]);
}
elseif(isset($_POST["borrar"]))
{
	unset($_SESSION["datos"]);
}
if(isset($_POST["mostrar"])){
	$_SESSION["datos"][]=$_POST["Apellido"];
}
elseif(isset($_POST["mostrar"]))
{
	unset($_SESSION["datos"]);
}
if(isset($_POST["mostrar"])){
	$_SESSION["datos"][]=$_POST["Direccion"];
}
elseif(isset($_POST["mostrar"]))
{
	unset($_SESSION["datos"]);
}
if(isset($_POST["mostrar"])){
	$_SESSION["datos"][]=$_POST["Telefono"];
}
elseif(isset($_POST["mostrar"]))
{
	unset($_SESSION["datos"]);
}
if(isset($_POST["mostrar"])){
	$_SESSION["datos"][]=$_POST["DUI"];
}
elseif(isset($_POST["mostrar"]))
{
	unset($_SESSION["datos"]);
}


echo "<pre>";
if(isset($_SESSION["datos"])){
	foreach($_SESSION["datos"] as $valor){
		
		echo "<tr><td>$valor;</td></tr><br>";
		
		
	}
	
	
}

?>
