<html>
<body>
<form method="post" action="Area de triangulo E.php"><br>
Ingrese la altura del triangulo:<br>
<input type="text" name="altura"><br>

<input type="submit" value="calcular"><br>
</form>
</body>

<?php


$altura=$_POST["altura"];

$multiplicacion = $altura*1.8;
$area=$multiplicacion/2;

echo "El area del triangulo es: ".$area;
?>


</html>