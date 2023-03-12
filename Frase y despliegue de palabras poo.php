<form method="post" action="Frase y despliegue de palabras poo.php"><br>
<h3>Ingrese una frase para ver el despliegue de palabras:<br></h3>
<input type="text" name="frase"><br>
<input type="submit" name="mostrar" value="Mostrar en columna">

</form>

<?php

/*class columna{
    

}*/

$frase=$_POST["frase"];
    echo "<dd>".$frase."</dd>";
/*$fra=new columna();
echo $fra->solucion($frase=$_POST["frase"]);*/

?>