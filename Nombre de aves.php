<html>
<body>

<form method ="post" action="Nombre de aves.php"><br>
<h3>Ingrese los nombres de las aves:<br></h3>
<label for= "" class= "firts-name"><b>Nombre:</b></label>
<input id="nombre" type="text" name="nombre" class ="inputArea" value="nombre"><br>
<input id="nombre" type="submit" name="ok" class="submit" value="ok"><br>
<input id="nombre" type="submit" name="borrar" class="submit" value="borrar"><br>
<input id= "nombre" type="submit" name "ordenar" class="submit" value= "ordenar">


</form>

</body>
</html>

<?php

session_start();
if(isset($_POST["ok"])){
	$_SESSION["nombre"][]=$_POST["nombre"];
}
elseif(isset($_POST["borrar"]))
{
	unset($_SESSION["nombre"]);
}
elseif(isset($_POST["ordenar"]))
{
	foreach($_SESSION["nombre"] as $valo){
		
		
		
		echo "<tr><td>sort($valo);</td></tr><br>";
		
		
	}
}


echo "<pre>";
if(isset($_SESSION["nombre"])){
	foreach($_SESSION["nombre"] as $valor){
		
		echo "<tr><td>$valor;</td></tr><br>";
		
		
	}
	
	
}

?>


