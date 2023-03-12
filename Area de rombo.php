<html>
<body>
<form method="post" action="Area de rombo.php"><br>
Ingrese diagonal 1:<br>
<input type="text" name="d1"><br>
Ingrese diagonal 2:<br>
<input type="text" name="d2"><br>

<input type="submit" value="calcular"><br>
</form>
</body>

<?php

$d1=$_POST["d1"];
$d2=$_POST["d2"];

$multiplicacion = $d1*$d2;
$area=$multiplicacion/2;

echo "El área del rombo es : ".$area;
?>


</html>