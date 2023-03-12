<HTML>
<HEEAD>
    <center><title> Cálculo de aumento </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el sueldo<h1>
$ :<input type="number"  name="sueldo" required min="1" step="0.01">
  <br>
    </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $sueldo = $_REQUEST["sueldo"];
      if ($sueldo>=550) {
        $aument = round((($sueldo*0.15)+$sueldo),2);
        // code...
        echo "Se le aplico el aumenro del 15% <br></br>";
            echo "Su sueldo con el aumento le quedo a : $$aument";
      }
      else {
        // code...
                echo "no se le plico el aumento del 15% <br></br>";
                    echo "Su sueldo  es  : $$sueldo";
      }

}
?>
</BODY>
</HTML>
