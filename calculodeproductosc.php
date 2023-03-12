<HTML>
<HEEAD>
    <center><title> Cálculo de cuentas de productos </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo " >
  <h1>Escribe la cantidad de compras<h1>
  <input type="number"  name="cantidad"required>
<br>
    </br>
    <input type="submit" name ="calcu" value="calcular" required>
    <br>
  </br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
  $cant  = $_POST["cantidad"];
  echo "<form method=POST>";
  for ($i=1; $i <=$cant ; $i++) {
    // code...
      echo "nota $i <input type=number name=precio[] required placeholder= 8 step=0.01><br></br>";

}
   echo "<input type=submit name=calculo2><br></br></form>";
echo "cantidad de notas : $cant <br></br>";
}
elseif (isset($_POST["calculo2"])) {
    $precio= $_REQUEST["precio"];
    $max= max($precio);
    $min= min($precio);
    $sum=0;
    foreach ($precio as $pre) {
        $sum +=$pre;
      // code...
    }
    $promedio=($sum/(count($precio)));
      echo "El presio mas barato es : $min <br></br>";
    echo "El presio mas caro : $max <br></br>";

}
?>
</BODY>
</HTML>
