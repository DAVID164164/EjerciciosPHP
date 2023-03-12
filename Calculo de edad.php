<html>
<form action="Calculo de edad.php" method="post"><br>
ingrese año de nacimiento:<br>
<input type= "text" name="edad"><br>
<input type="submit" value=" Mostrar "><br>
</form> 

<?php
$edad= $_POST["edad"];
$actualidadA= date("Y");
$actualidadM=date("m");
$edadUs= $actualidadA-$edad;

echo "Su edad es: ".$edadUs." años con ".$actualidadM." meses";

?>

</html>