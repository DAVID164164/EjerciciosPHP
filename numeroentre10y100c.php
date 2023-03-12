<HTML>
<HEEAD>
    <center><title> Cálculos de capital</title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el numero<h1>
<input type="number"  name="numero" required min="0">
  <br>
    </br>

  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $numero = $_REQUEST["numero"];
      if ($numero>=10 && $numero<=100) {
        // code...
        echo "el numero $numero esta entre 10 y 100";
      }
      else {
        // code...
                echo "el numero $numero no esta entre 10 y 100";
      }

}
?>
</BODY>
</HTML>
