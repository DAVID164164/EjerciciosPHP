<html>
<body>
<form method="post" action="Sueldo inferior de 600.php"><br>
Ingrese el sueldo:<br>
<input type="text" name="sueldo"><br>

<input type="submit" name="confirmar" value="confirmar"><br>
</form>
</body>

<?php

$sueldo=$_POST["sueldo"];
$aumento=$_POST["aumento"];
$newSueldo=$_POST["newSueldo"];

if($sueldo<600)
{
	$aumento= $sueldo*0.10;
	$newSueldo=$sueldo+$aumento;
	echo "Su sueldo es: $".$sueldo." con el aumento es: $".$newSueldo;
}		
else
{
	echo "Su sueldo es: $".$sueldo." NO aplica aumento";
}

?>
</html>