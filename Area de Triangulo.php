<html>
<body>
<form method="post" action="Area de triangulo.php"><br>
Ingrese la base del triangulo:<br>
<input type="text" name="base"><br>
Ingrese la altura del triangulo:<br>
<input type="text" name="altura"><br>

<input type="submit" value="calcular"><br>
</form>
</body>

<?php

$base=$_POST["base"];
$altura=$_POST["altura"];

$multiplicacion = $base*$altura;
$area=$multiplicacion/2;

echo "El area del triangulo es: ".$area;
?>


</html>
