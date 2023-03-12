<HTML>
<HEEAD>
    <center><title> Cálculo de dias vividos </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo " >
  <h1>Escribe las horas</h1>
  <input type="text"  name="horas"required>
  <br>
  </br>
  <h1>Escribe los minutos</h1>
  <input type="text"  name="minutos"required>
  <br>
  </br>
  <h1>Escribe los segundos<h1>
    <input type="text"  name="segundos"required>
    <br>
    </br>
    <input type="submit" name ="calcu" value="calcular" required>
    <br>
  </br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
  $horas = $_POST["horas"];
    $minutos = $_POST["minutos"];
    $segundos = $_POST["segundos"];
      $patronent="/^([0-9]{1,})+$/";
      if (!preg_match($patronent,$horas)) {
        // code...
        echo "escriba solo numeros enteros <br></br>";
      }elseif (!preg_match($patronent,$minutos)) {
        // code...
          echo "escriba solo numeros enteros <br></br>";
      } elseif (!preg_match($patronent,$segundos)) {
        // code...
      } else{
        // code...
        $minutosday=($minutos/1140);
      $horasday = ($horas/24);
        $segundosday = ($segundos/86400);
      $day = ($horasday + $minutosday + $segundosday);
      echo "los dias que a vivido es : "; echo ceil ($day); echo " Dia";
      }
        // code...


}
?>
</BODY>
</HTML>
