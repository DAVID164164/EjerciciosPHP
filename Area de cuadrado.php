<html>
<body>
<form method="post" action="Area de cuadrado.php"><br>
Ingrese el valor del lado 1:<br>
<input type="text" name="L1"><br>
Ingrese el valor del lado 2:<br>
<input type="text" name="L2"><br>

<input type="submit" value="calcular"><br>
</form>
</body>

<?php

$L1=$_POST["L1"];
$L2=$_POST["L2"];

$multiplicacion = $L1*$L2;

echo "El área del cuadrado es : ".$multiplicacion." cm2";
?>


</html>