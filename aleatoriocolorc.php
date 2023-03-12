<HTML>
<HEEAD>
    <center><title> Color aleatorio </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el precio<h1>
$ :<input type="number"  name="precio" required min="1" step="0.01">
  <br>
    </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $sueldo = $_REQUEST["precio"];
  $rand=rand(1,100);
//  $tim= array();
//  $colors = ImageCreateTrueColor(1,100);
   $colors = rand("Amarillo","Verde");
  // $randomcolor = '#' . dechex(rand(1,100));
  //echo "$colors";

  echo "$colors";


}
?>
</BODY>
</HTML>
