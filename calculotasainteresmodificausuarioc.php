<HTML>
<HEEAD>
    <center><title> Cálculos de capital</title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el moto <h1>
  $ :<input type="number"  name="monto" required step="0.01" min="1">
  <br>
    </br>
      <h1>Escriba el año </h1>
    <input type="number"  name="años" required min="1" >
    <br>
      </br>
        <h1>Escriba el interes <h1>
    % :<input type="number"  name="interes" required min="1" max="99">
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
        $an = $_REQUEST["años"];
          $interes = $_REQUEST["interes"];
          $por= $interes/100;
          $elebacion= 12*$an;
//$capital = round(($monto*pow((1+($por/12)),-$elebacion),2);
$capital = round($monto*pow((1+($por/12)),-$elebacion),2);
echo "El dinero que debe positace en una caja de credito es : $$capital";
}
?>
</BODY>
</HTML>
