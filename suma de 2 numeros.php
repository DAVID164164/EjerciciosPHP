<html>
<body>
<form method ="post" action="suma de 2 numeros.php"><br>
Ingrese el primer numero:<br>
<input type="text" name= "num1"><br>
Ingrese el segundo numero:<br>
<input type="text" name= "num2"><br>
<input type="submit" value="Calcular"><br>
</form> 

<?php
$num1 =$_POST["num1"];
$num2=$_POST["num2"];
$total= $num1+$num2;

echo "la suma de los numeros es: ".$total;
?>

</body>
</html>
