<html>
<body>
<form method ="post" action="numeros multiplos.php"><br>
Ingrese el primer número:<br>
<input type="text" name="num1"><br>
Ingrese el segundo número:<br>
<input type="text" name="num2"><br>
<input type ="submit" name="calcular" value="calcular"><br>
</form>
</body>

<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$r=$num1/$num2;
if($r==0)
{
	print($num1." Si es un numero numero multiplo de ".$num2);
}
else
{
	echo $num1." No es multiplo ".$num2;
}
?>

</html>