<html>
<form method="post" action="Listado de paises.php"><br>
<span
style= color:limegreen><h3>Seleccione los paises de los que desee ver datos:</h3><br>
</span>
<input type="checkbox" name="pais[]" value="<h5>El Salvador:</h5><br> -Idioma: Español(Castellano)
-Moneda: Dolar -Continente: America">El Salvador<br>
<input type="checkbox" name="pais[]" value="<h5>Guatemala:</h5><br> -Idioma: Español
-Moneda: Quetzal -Continente: America">Guatemala<br>
<input type="checkbox" name="pais[]" value="<h5>España:</h5><br> -Idioma: Español
-Moneda: Euro -Continente: Europa">España<br>
<input type="checkbox" name="pais[]" value="<h5>China:</h5><br> -Idioma: Chino Mandarin
-Moneda: Renminbi -Continente: Asia">China<br>
<input type="submit" value="Listo" name="Listo"><br>

<?php

if(isset($_POST["pais"]))
{
    $country=$_REQUEST["pais"];

    echo "<span style= color:purple> <h4>Datos:</h4></span>";

    foreach($country as $country)
    {
        print("$country<br>\n");
    }
}

?>
</html>