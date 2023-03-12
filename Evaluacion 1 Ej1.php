<html>
<form method="POST" name="calculo " >
  <h2>Escribe la cantidad de compras<h2>
  <input type="number"  name="cantidad"required>
<br>
    </br>
    <input type="submit" name ="calcular" value="calcular" required>
    <br>
  </br>
</form>

<?PHP
if(isset($_POST["calcular"]))
{
  $cant  = $_POST["cantidad"];
  echo "<form method=POST>";
  for ($i=1; $i <=$cant ; $i++) {
    
      echo "costo de producto $i <input type=number name=precio[] required placeholder= 8 step=0.01><br></br>";

}
   echo "<input type=submit name=calculo2><br></br></form>";
echo "cantidad de compras : $cant <br></br>";
}
elseif (isset($_POST["calculo2"])) {
    $precio= $_REQUEST["precio"];
    $max= max($precio);
	/*$compras= $cant;*/
    $min= min($precio);
    $sum=0;
	
    foreach ($precio as $pre) {
        $sum +=$pre;
     
    }
    $promedio=($sum/(count($precio)));
      echo "El presio mas bajo es : $min <br></br>";
	  
	 echo "El presio mas alto : $max <br></br>";  
	  

    
    

}

?>


</html>