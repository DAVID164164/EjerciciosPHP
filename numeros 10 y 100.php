<html>
<body>
<form method="post" action="numeros 10 y 100.php"><br>
Ingrese el número:<br>
<input type="text" name="numero"><br>
<input type="submit" name="Evaluar" value="Evaluar"><br>
</form>
</body>

<?php

$numero=$_POST["numero"];
if($numero>=10 && $numero<=100)
{
echo "El número es: ".$numero." SI esta entre 10 y 100";
}
else{
echo "El número es: ".$numero." NO esta entre 10 y 100";
}
?>

</html>