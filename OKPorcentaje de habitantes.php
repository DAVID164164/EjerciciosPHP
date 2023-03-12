<html>
<body>
<form method= "post" action=""><br>
Ingrese el numero de hombres:<br>
<input type="text" name="hombres"><br>

<input type="submit" value="calcular porcentaje"><br>


</form>
</body>

<?php

$hombres= $_POST["hombres"];

$total= 857263;
$DivHombres= $hombres/857263;
$porcentHombres= $DivHombres*100;
$RestMujeres= 100-$porcentHombres;
$porcentMujeres= $RestMujeres;


echo "El porcentaje de hombres es de: ".ceil($porcentHombres)." %    ";
echo "El porcentaje de mujeres es de: ".ceil($porcentMujeres)." %"; 

?>

</html>

