<HTML>
<HEEAD>
    <center><title> Cálculos de capital</title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el moto solo puede ser 250,000 <h1>
  $ :<input type="number"  name="monto" required min="250000" max="250000" value="250000">
  <br>
    </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $monto = $_REQUEST["monto"];
$capital = round(($monto*pow((1+(0.09/12)),-24)),2);
echo "El dinero que debe positace en una caja de credito es : $$capital";
}
?>
</BODY>
</HTML>
