<form method="post" action="mayor entre 2 num poo.php"><br>
<h3>Ingrese el primer número:</h3>
<input type="text" name="num1"><br>
<h3>Ingrese el primer número:</h3>
<input type="text" name="num2"><br>

<input type="submit" name="Evaluar" value="Evaluar">
</form>

<?php
class numeros{
function solution($num1,$num2){


    if($num1>$num2)
    {
        echo "<span style=color:purple >El primer numero es mayor: ".$num1. "</span>";
    }
    elseif($num1<$num2)
    {
        echo "<span style=color:green >El Segundo numero es mayor: ".$num2. "</span>";
    }
} 

}
$nu=new numeros();
echo $nu->solution($num1=$_POST["num1"],$num2=$_POST["num2"]);

?>