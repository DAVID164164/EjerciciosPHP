<HTML>
<HEEAD>
    <center><title> Cálculo de edad </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo " >
  <h1>Escriba su fecha de nacimiento<h1>
  <input type="text"  name="calculos" required>
  <br>
  </br>

  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $fechad = $_POST["calculos"];
  $patron="/^([0-9]{1,})+$/";
if (!preg_match($patron,$fechad )) {
  // code...
  echo "solo escriba numeros enteros";
}
else{
    $fechac=2019;
    $fechanas = ($fechac - $fechad);
    $meses = ($fechanas*12);
    echo "su edad es: ".$fechanas ." años ".$meses." meses";

}

}
?>
</BODY>
</HTML>
