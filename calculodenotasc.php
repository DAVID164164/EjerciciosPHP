<HTML>
<HEEAD>
    <center><title> Cálculo de presupuesto </title>

</HEEAD>
<BODY bgcolor ="skyblue">

</script>
    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo " >

<br>
</br>
  <h1>  Escribir catidad de notas que va a ingresar:<h1>
  <input type="number" name ="cantidad" required>
  <br>
  </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
    $cant= $_REQUEST["cantidad"];
    echo "<form method=POST>";
    for ($i=1; $i <=$cant ; $i++) {
      // code...
        echo "nota $i <input type=number name=notas[] required placeholder= 8 min=0 max=10><br></br>";

  }
     echo "<input type=submit name=calculo2><br></br></form>";
echo "cantidad de notas : $cant <br></br>";
}
elseif (isset($_POST["calculo2"])) {
  // code...
  $patron ="/^([0-9]{1,}[0-9]{2})+$/";
  $notas= $_REQUEST["notas"];
  $sum=0;
  $apro=0;
  $repro=0;
  $max = max($notas);
  $min = min($notas);
    // code...

      // code...

    // code...
    foreach ($notas as $not) {
      // code...
      $sum +=$not;
if ($not>=6.00) {
  // code...
  $apro = $apro + 1;

}
if ($not<6.00) {
// code...
$repro = $repro + 1;
}
    }
    $promedio=($sum/(count($notas)));
      echo "El menor es : $min <br></br>";
    echo "El mayor es : $max <br></br>";
    echo "El promedio es: $promedio <br></br> ";
    echo "Los aprobados son : $apro <br></br>";
echo "Los reprobados son : $repro <br></br>";


}
?>
</BODY>
</HTML>
