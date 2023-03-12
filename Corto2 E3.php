<html>
<body>
<form method ="post" action="Corto2 E3.php"><br>
<center> 
<h3>Ingrese el número decimal:<br></h3>
</center>

<center>   
<label for= "" class= "numero"><b>Número:</b></label>
<input id="numero" type="text" name="numero" class ="inputArea" value=""><br><br>
</center>


<center> 
<h1><input id="mostrar" type="submit" name="mostrar" value="mostrar"></h1>
<input id="Limpiar" type="submit" name="Limpiar" value="Limpiar">
</center>

</form>

</body>
</html>

<?php
	
	
session_start();
    
if(isset($_POST["mostrar"])){
$_SESSION["conversiones"][]= decbin($_POST["numero"]);
}
elseif(isset($_POST["mostrar"]))
{
	unset($_SESSION["numero"]);
}
elseif(isset($_POST["Limpiar"]))
{
	unset($_SESSION["conversiones"]);
}
if(isset($_POST["mostrar"])){
	
	$_SESSION["conversiones"][]=decoct($_POST["numero"]);
}
elseif(isset($_POST["mostrar"]))
{
	
	unset($_SESSION["conversiones"]);
}
if(isset($_POST["mostrar"])){
$_SESSION["conversiones"][]=dechex($_POST["numero"]);
}
elseif(isset($_POST["mostrar"]))
{

	unset($_SESSION["conversiones"]);
}


echo "<pre> ";

if(isset($_SESSION["conversiones"])){
	
	echo "<center><br>Binario: Octal: Hexadecimal: <br><center>";
	print"<br>";

	
  	foreach($_SESSION["conversiones"] as $valor){
						print"<br>";

		echo "<tr><td>$valor||  </tr></td>";

	}

}




?>