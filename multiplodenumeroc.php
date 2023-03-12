<HTML>
<HEEAD>
    <center><title> Cálculo de multiplos de nimeros </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el numero 1</h1>
<input type="number"  name="numero1" required min="1" >
  <br>
    </br>
      <h1>Escriba el numero 1<h1>
    <input type="number"  name="numero2" required min="1" >
      <br>
        </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $numer1 = $_REQUEST["numero1"];
        $numer2 = $_REQUEST["numero2"];
        if ($numer1>$numer2) {
          // code...
          if ($numer1%$numer2 == 0) {

            // code...
            echo "El numero $numer1 y el $numer2 son multiplos";
          }
        else {
          // code...
              echo "El numero $numer1 y el $numer2 no son multiplos";
        }
      }else {
        // code...
        echo "escriba el numero mayor primero";
      }

}
?>
</BODY>
</HTML>
